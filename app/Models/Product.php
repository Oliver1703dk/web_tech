<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable =[
        "id",
        "name",
        "price",
        "description"
    ];

    private $id;
    private $name;
    private $price;
    private $description;


    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }




}
