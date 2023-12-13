<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productPage()
    {
        $products = [
          new Product(["id"=>0, "name"=>"Iphone 14 pro", "price"=> 10000, "description" => "Lorum ipsum"]),
          new Product(["id"=>1, "name"=>"Iphone 17 pro", "price"=> 10000, "description" => "Lorum ipsum"]),
        ];

        return view('productPage')->with(["products"=>$products]);
    }

    // Assuming this is part of your controller method
    public function index()
    {
        // Fetch products from the database
        $products = Product::all();

//        dd("Index method called");
//        dd($products);



        // Pass the products to the view
        return view('index', compact('products'));
    }








}



