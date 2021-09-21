<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(){
        return view('contact-us');
    }

    public function store(){

        $contact = new ContactUs;
        $contact->name = request('name');
        $contact->email = request('email');
        $contact->phone = request('phone');
        $contact->message = request('message');
        $contact->save();
        return view('contact-us');
    }
}
