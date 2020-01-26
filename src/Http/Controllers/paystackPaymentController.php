<?php

namespace bazzlylinks\paystack\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use bazzlylinks\paystack\Models\PaystackPayment;

use bazzlylinks\paystack\Mail\paymentMailable;

class paystackPaymentController extends Controller
{
public function index(){
    return view('paystack::paystack');
}

public function payment(Request $request){



    Mail::to(config('officepay.send_email_to'))->send(new paymentMailable($request->payment_type,$request->email,$request->currency,$request->amount));
    PaystackPayment::create($request->all());
    return redirect(route('paystack'));

}
}
