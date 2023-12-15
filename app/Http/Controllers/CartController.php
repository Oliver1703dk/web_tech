<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cart; // Import the Cart model
use App\Models\Product; // If you use the Product model, you should import it too
use App\Services\PaymentGateway; // Import the PaymentGateway service if used
use App\Models\CartProduct;


class CartController extends Controller {

    public function cart()
    {
        return view('cart');
    }


    public function minusQuantity(Request $request){
        $productId = $request->input('product_id');


        // Check if the user is authenticated
        if (auth()->check()) {
            $user = auth()->user();

            // Check if the user has a cart
            if ($user->cart) {
                $cart = $user->cart;

            } else {
                // If the user doesn't have a cart, create a new one
                $cart = new Cart();
                $user->cart()->save($cart);
            }
            $cart->minusItem($productId);
            return redirect()->back()->with('success', 'Product minus one to cart successfully.');


        } else {
            // User is not logged in
            return redirect(route('cart'))->with('failed', 'Not added to cart');
        }


    }



    public function addItem(Request $request)
//    public function addItem(Product $product, $quantity = 1)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');
//        dd($productId);
        // Check if the user is authenticated
        if (auth()->check()) {
            $user = auth()->user();

            // Check if the user has a cart
            if ($user->cart) {
                $cart = $user->cart;
            } else {
                // If the user doesn't have a cart, create a new one
                $cart = new Cart();
                $user->cart()->save($cart);

            }

            // Add the product to the cart
            $cart->addItem($productId, $quantity);

            return redirect()->back()->with('success', 'Product added to cart successfully.');
        } else {
            // User is not logged in
            return redirect(route('login'))->with('failed', 'Not logged in');
        }
    }
//    public function addItem(Request $request)
//    {
//        $productId = $request->input('productId');
//
//        // Validate the productId
//        if (!isset($productId) || $productId < 1) {
//            return redirect()->back()->with('error', 'Invalid product ID');
//        }
//
//        // Check if the product is already in the cart
//        $cartProduct = CartProduct::where('cart_id', $request->userId)
//            ->where('product_id', $productId)
//            ->first();
//
//        if ($cartProduct) {
//            // If the product is already in the cart, update the quantity
//            $cartProduct->quantity++;
//            $cartProduct->save();
//        } else {
//            // If the product is not in the cart, add it to the cart
//            $cartProduct = new CartProduct();
//            $cartProduct->cart_id = $request->userId;
//            $cartProduct->product_id = $productId;
//            $cartProduct->quantity = 1;
//            $cartProduct->save();
//        }
//
//
//        return redirect()->route('index')->with('success', 'Product added to cart');
//    }


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

    public function index()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $user = auth()->user();

        // Fetch the cart for the authenticated user
        $cart = Cart::with('products')->find($user->cart_id);

        if (!$cart) {
            // Handle the case where the cart doesn't exist
            return view('cart')->with('cartItems', []);
        }

        // Retrieve products and their quantities from the pivot table
        $cartItems = $cart->products->map(function ($product) {
            return [
                'product' => $product,
                'quantity' => $product->pivot->quantity
            ];
        });

        return view('cart', compact('cartItems'));
    }

}
