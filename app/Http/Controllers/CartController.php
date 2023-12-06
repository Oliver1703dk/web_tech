<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cart; // Import the Cart model
use App\Models\Product; // If you use the Product model, you should import it too
use App\Services\PaymentGateway; // Import the PaymentGateway service if used


class CartController extends Controller {
    public function addItem(Product $product, $quantity = 1) {
        if (isset($this->items[$product->id])) {
            $this->items[$product->id]['quantity'] += $quantity;
        }
        else {
            $this->items[$product->id] = [
                'product' => $product,
                'quantity' => $quantity
            ];
        }

        //THE METHOD CAN BE USED LIKE THIS
        // Assuming you have an instance of the Cart class
        //$cart = new Cart();

        // Assuming you have an instance of the Product class
        //$product = Product::find(1);

        // Add the product to the cart with a quantity of 2
        //$cart->addProduct($product, 2);
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
