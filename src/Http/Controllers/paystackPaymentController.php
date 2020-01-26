<?php

namespace payment\paystack\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use payment\paystack\Models\PaystackPayment;

use payment\paystack\Mail\paymentMailable;

class paystackPaymentController extends Controller
{
public function index(){
    return view('paystack::paystack');
}

public function payment(Request $request){



    Mail::to(config('payment.send_email_to'))->send(new paymentMailable($request->payment_type,$request->email,$request->currency,$request->amount));
    PaystackPayment::create($request->all());
    return redirect(route('paystack'));

}
}
