<?php

namespace App\Services;

use App\Models\Payment;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;

class PaypalService
{
    private $client;

    function __construct()
    {
        $environment = new SandboxEnvironment(env('PAYPAL_SANDBOX_CLIENT_ID'), env('PAYPAL_SANDBOX_CLIENT_SECRET'));
        $this->client = new PayPalHttpClient($environment);
    }
 
    public function createOrder($id)
    {
        $payment = Payment::find($id);
        $request = new OrdersCreateRequest();
        $request->headers["prefer"] = "return=representation";
        $request->body = [
            "intent" => "CAPTURE",
            "purchase_units" => [[
                "reference_id" => 'webmall_'. uniqid(),
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

        return $this->client->execute($request);
    }

    public function captureOrder($paypalOrderId)
    {
        $request = new OrdersCaptureRequest($paypalOrderId);

        return $this->client->execute($request);
    }

 

}