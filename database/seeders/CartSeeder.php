<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Cart;
use App\Product;

class CartSeeder extends Seeder
{
    public function run()
    {
        $cart = Cart::create([

        ]); // Create a cart

        // Associate the cart with a customer (assuming customer with ID 1)
        $customer = Customer::find(1);
        $customer->carts()->save($cart);

        // Define an array of product IDs to attach to the cart
        $productIds1 = [1, 2]; // Replace with actual product IDs

        // Attach products to the cart
        $cart->products()->attach($productIds1);


        //$products = Product::whereIn('id', [1, 2, 3])->get(); // Get products to add to the cart
        //$cart->products()->attach($products);
    }
}


