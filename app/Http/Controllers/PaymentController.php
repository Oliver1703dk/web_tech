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
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:1',
            'phone' => 'required|numeric',
        ]);

        return redirect(route('PaymentComplete'))->with('success', 'Payment success');
    }
    public function checkout(\App\Models\PaymentGateway $paymentGateway) {
        // Implementation for the checkout process
    }

}
