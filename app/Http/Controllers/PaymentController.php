<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function checkoutPage ()
    {
        return view('CheckoutPage');
    }
    public function checkoutPagePost(Request $request)
    {
        $request->validate([
//            'email' => 'required|email|unique:users',
//            'password' => 'required|min:1',
//            'phone' => 'required|numeric',
            'firstName' => 'required|min:1',
            'lastName' => 'required|min:1',
            'address' => 'required|min:1',
            'zipcode' => 'required|numeric',
            'city' => 'required|min:1',
            'phone' => 'required|numeric',
        ]);

        return redirect(route('paymentComplete'))->with('success', 'Payment success');
    }



    public function checkout(\App\Models\PaymentGateway $paymentGateway) {
        // Implementation for the checkout process
    }

}
