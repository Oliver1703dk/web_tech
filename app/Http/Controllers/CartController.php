<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cart; // Import the Cart model
use App\Models\Product; // If you use the Product model, you should import it too
use App\Services\PaymentGateway; // Import the PaymentGateway service if used


class CartController extends Controller {
//    public function addItem(Product $product, $quantity = 1) {
//
//        //TODO: When not logged in, it goes to the login page.
//        // Should this be changed?
//        if (auth()->check()) {
//            // User is logged in
//
//        } else {
//            // User is not logged in
////            return view('login');
//            return redirect(route('login'))->with('failed', 'Not logged in');
//        }
//
//        // The authenticated user is automatically injected into the method
//        $user = auth()->user();
//
//        // Check if the user has a cart
//        if ($user->cart) {
//            $cart = $user->cart;
//        } else {
//            // If the user doesn't have a cart, create a new one
//            $cart = new Cart();
//            $user->cart()->save($cart);
//        }
//
//        // Access the cart items using $cart->items
//        if (isset($cart->items[$product->id])) {
//            $cart->items[$product->id]['quantity'] += $quantity;
//        } else {
//            $cart->items[$product->id] = [
//                'product' => $product,
//                'quantity' => $quantity
//            ];
//        }
//
//        //THE METHOD CAN BE USED LIKE THIS
//        // Assuming you have an instance of the Cart class
//        //$cart = new Cart();
//
//        // Assuming you have an instance of the Product class
//        //$product = Product::find(1);
//
//        // Add the product to the cart with a quantity of 2
//        //$cart->addProduct($product, 2);
//    }
    public function addItem(Product $product, $quantity = 1)
    {
        // Check if the user is authenticated
        if (auth()->check()) {
            $user = auth()->user();

            // Check if the user has a cart
            if ($user->cart) {
                $cart = $user->cart;
            } else {
                // If the user doesn't have a cart, create a new one
                $cart = new Cart();
                $user->cart()->save($cart);
            }

            // Add the product to the cart
            $cart->addItem($product, $quantity);

            return redirect()->back()->with('success', 'Product added to cart successfully.');
        } else {
            // User is not logged in
            return redirect(route('login'))->with('failed', 'Not logged in');
        }
    }

    public function getItems() {
        return $this->items;

        //THE METHOD CAN BE USED LIKE THIS
        // Assuming you have an instance of the Cart class
        //$cart = new Cart();

        // Get items from the cart
        //$items = $cart->getItems();

        // $items is an associative array containing products and their quantities in the cart
        //var_dump($items);

    }
}
