<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Teacher;
use App\Models\GroupStudent;
use Illuminate\Support\Facades\Auth;
use App\Models\Group;
use Illuminate\Support\Facades\DB;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;

class PaymentController extends Controller
{
    private $client;

    function __construct()
    {
        $environment = new SandboxEnvironment('AZ5DaDp-tiq0t1oSXoFXu_zOC0ACgF3udD1EuJJk2CfwVG3vD3c7fj-J5kY3UDdG6uHOumrSoWgiDfRr', 'EEz_3Bj0-y7zgSxsZh6Yh_VNbUhEliyWMr-v0Tq7jnoQEf2eaM6K1p83FxMNpOg8VZnUS-GpCGxd1ZFH');
        $this->client = new PayPalHttpClient($environment);
    }

    public function getExpressCheckout($id)
    {
        $payment = Payment::find($id);
        $request = new OrdersCreateRequest();
        $request->headers["prefer"] = "return=representation";
        $request->body = [
            "intent" => "CAPTURE",
            "purchase_units" => [[
                "reference_id" => 'webmall_' . uniqid(),
                "amount" => [
                    "value" => $payment->total,
                    "currency_code" => "USD"
                ]
            ]],
            "application_context" => [
                "cancel_url" => route('paypal.cancel'),
                "return_url" => route('paypal.success', $id)
            ]
        ];

        $response = $this->client->execute($request);

        if ($response->statusCode !== 201) {
            abort(500);
        }

        $order = Payment::find($id);
        $order->paypal_id = $response->result->id;
        $order->save();

        foreach ($response->result->links as $link) {
            if ($link->rel == 'approve') {
                return redirect($link->href);
            }
        }
    }

    public function captureOrder($paypalOrderId)
    {
        $request = new OrdersCaptureRequest($paypalOrderId);

        return $this->client->execute($request);
    }

    public function getExpressCheckoutSuccess(Request $request, $id)
    {
        $payment = Payment::find($id);

        $response = $this->captureOrder($payment->paypal_id);

        if ($response->result->status == 'COMPLETED') {
            $payment->is_paid = 1;
            $payment->status = "completed";
            $payment->save();

            $teacher = Teacher::find($payment->group->courseTeacher->teacher->id);
            $teacher->t_acc_reccivable += $response->result->purchase_units[0]->payments->captures[0]->amount->value;
            $teacher->t_net_income += $response->result->purchase_units[0]->payments->captures[0]->amount->value;
            $teacher->save();

            $group_student = new GroupStudent;
            $group_student->student_id = Auth::user()->students->id;
            $group_student->group_id = $payment->group->id;
            $group_student->payment_id = $payment->id;
            $group_student->save();

            return redirect()->route('payment' , ['payment'=>"SUCCESS", 'id'=>$id]);

        }

        return redirect('/');
    }
    public function cancelPage()
    {
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $payment = DB::table('payments')
        ->where('students_id' , '=' , Auth::user()->students->id)
        ->where('group_id' , '=' , $id)
        ->first();
        if ( !isset($payment)){
            $group = Group::find($id);
            $payment = new Payment;
            $payment->students_id = Auth::user()->students->id;
            $payment->total = $group->price - ($group->price * $group->discount / 100);
            $payment->group_id = $id;
           $payment->save();
           return redirect()->route('paypal.checkout', $payment->id);
        }   elseif ($payment->is_paid == 0) {
            return redirect()->route('paypal.checkout', $payment->id);
        }   else    {
            return redirect()->route('payment',['status'=> "duplicate", 'id'=>$id]);
        }

    }


    public function index()
    {
        return view('payment', ["title" => "payment"]);
    }

}