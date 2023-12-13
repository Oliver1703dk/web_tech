<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productPage(Request $request)
    {
        $productId = $request->input('product_id');

        $product = Product::find($productId);

        // Check if product exists
        if (!$product) {
            // Handle the case where the product is not found, e.g., redirect or show an error message
            return redirect()->back()->withErrors('Product not found.');
        }



        return view('productPage', compact('product'));


//        return view('productPage')->with(["products"=>$products]);
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



