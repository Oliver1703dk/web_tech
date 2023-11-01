<?php

namespace App\Http\Controllers;

class CartController {
    public function addToCart(Product $product, Cart $cart) {
        // Add a product to the cart
    }

    public function checkout(Cart $cart, PaymentGateway $paymentGateway) {
        // Handle the checkout process
    }
}
