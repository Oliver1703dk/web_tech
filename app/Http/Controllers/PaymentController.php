<?php

namespace App\Http\Controllers;

use http\Client\Request;

class PaymentController
{
    public function CheckoutPage ()
    {
        return view('CheckoutPage');
    }
    public function CheckoutPagePost(Request $request)
    {



        return redirect(route('PaymentComplete'))->with('success', 'Payment success');
    }
    public function checkout(\App\Models\PaymentGateway $paymentGateway) {
        // Implementation for the checkout process
    }

}
