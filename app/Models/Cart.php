<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    private $id;
    private $items = [];


    public function products()
    {
        return $this->belongsToMany(Product::class, 'cart_product')->withPivot('quantity');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'cart_id', 'id');
    }





    public function addItem(Product $product, $quantity)
    {
        $existingProduct = $this->products()->where('product_id', $product->id)->first();

        if ($existingProduct) {
            // If the product already exists in the cart, update the quantity
            $existingProduct->pivot->quantity += $quantity;
            $existingProduct->pivot->save();
        } else {
            // If the product is not in the cart, attach it with the given quantity
            $this->products()->attach($product, ['quantity' => $quantity]);
        }
    }

    public function getItems() {
        // Implementation to retrieve cart items
    }

    public function checkout(PaymentGateway $paymentGateway) {
        // Implementation for the checkout process
    }





}
