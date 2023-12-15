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

    public function productPageAdmin(){
        return view('productPageAdmin');
    }

    public function addProductDB(Request $request){
        // Retrieve product data from the request
        $data = $request->only([
            'name', 'price', 'qty', 'storage', 'CPU', 'RAM', 'SSD', 'Desc'
        ]);

        // Optional: Validate the data here

        // Create a new Product instance and fill it with data
        $product = new Product();
        $product->name = $data['name'];
        $product->price = $data['price'];
        $product->description = $data['Desc'];
        $product->quantity = $data['qty'];
        $product->product_info1 = $data['storage'];
        $product->product_info2 = $data['CPU'];
        $product->product_info3 = $data['RAM'];
        $product->product_info4 = $data['SSD'];
        $product->image = 'https://static.thenounproject.com/png/1226185-200.png'; // Handle image upload if necessary

        // Save the product
        $product->save();

        // Redirect or return a response
        return redirect()->route('index'); // Replace 'some.route.name' with the appropriate route
    }








}



