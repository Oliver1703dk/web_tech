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


    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
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
