<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    private $id;
    private $customerId;
    private $items = [];


    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }

    public function cart()
    {
        return $this->hasOne(Cart::class);
    }


    public function addItem(Product $product) {
        // Implementation to add a product to the cart
    }

    public function getItems() {
        // Implementation to retrieve cart items
    }

    public function checkout(PaymentGateway $paymentGateway) {
        // Implementation for the checkout process
    }





}
