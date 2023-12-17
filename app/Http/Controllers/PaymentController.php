<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use \Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function checkoutPage ()
    {
        return view('CheckoutPage');
    }

//    public function indexCheckoutPage()
//    {
//        // Assuming you have access to the currently authenticated user
//        $user = auth()->user();
//
//        // Fetch the user's cart
//        $cart = $user->cart;
//
//        // If the user has a cart, fetch the products in the cart
//        if ($cart) {
////            $cartItems = $cart->products()->with('pivot')->get();
//            $cartItems = $cart->products()->get();
////            dd($cartItems);
//
//        } else {
//            // Handle the case where the cart is empty or doesn't exist
//            $cartItems = collect();
//        }
//
//        // Pass the cart items to the view
//        return view('checkoutPage', compact('cartItems'));
//    }
    public function indexCheckoutPage()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $user = auth()->user();

        // Fetch the cart for the authenticated user
        $cart = Cart::with('products')->find($user->cart_id);

        if (!$cart) {
            // Handle the case where the cart doesn't exist
            return view('cart')->with('cartItems', []);
        }

        // Retrieve products and their quantities from the pivot table
        $cartItems = $cart->products->map(function ($product) {
            return [
                'product' => $product,
                'quantity' => $product->pivot->quantity
            ];
        });

        // Pass the cart items to the view
        return view('checkoutPage', compact('cartItems'));
    }

    public function checkoutPagePost(Request $request)
    {
        $request->validate([
            'firstName' => 'required|min:1',
            'lastName' => 'required|min:1',
            'address' => 'required|min:1',
            'zipcode' => 'required|numeric',
            'city' => 'required|min:1',
            'phone' => 'required|numeric',
        ]);

        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $user = auth()->user();

        // Fetch the cart for the authenticated user
        $cart = Cart::with('products')->find($user->cart_id);

        if (!$cart) {
            // Handle the case where the cart doesn't exist
            return view('cart')->with('cartItems', []);
        }

        foreach ($cart->products as $product) {
            // Here you subtract the amount bought from the product's quantity
            // Assuming 'quantity' in the pivot table represents the amount bought for each product
            $boughtQuantity = $product->pivot->quantity;
            $product->quantity -= $boughtQuantity;

            // Save the updated product quantity
            $product->save();
        }


        // Clear the items in the cart
        $cart->products()->detach();

        // Persist the changes to the database
         $cart->save();

        return redirect(route('paymentComplete'))->with('success', 'Payment success');
    }




    public function checkout(\App\Models\PaymentGateway $paymentGateway) {
        // Implementation for the checkout process
    }

}
