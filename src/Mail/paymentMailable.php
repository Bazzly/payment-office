<?php

namespace bazzlylinks\paystack\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class paymentMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $payment_type;
    public $email;
    public $currency;
    public $amount;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($payment_type,$email,$currency,$amount)
    {
        $this->payment_type = $payment_type;
        $this->email = $email;
        $this->currency = $currency;
        $this->amount = $amount;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('paystack::payment.email')->with([
            'payment_type' => $this->payment_type,
            'email'=> $this->email,
            'amount'=> $this->amount,
            'currency'=> $this->currency,
            ]);
    }
}
