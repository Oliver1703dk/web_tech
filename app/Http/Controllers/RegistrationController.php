<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function userReg()
    {
        return view('userReg');
    }

    public function userRegPost(Request $request)
    {

        // Validate the request data
        $validator = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:1',
            'phone' => 'required|numeric',
        ]);

//        // If validation fails, redirect back with errors
//        if ($validator->fails()) {
//            return Redirect::back()->withInput()->withErrors($validator);
//        }

        // Check if a user with the given email already exists
        $existingUser = User::where('email', $request->email)->first();



        if($existingUser){
            return Redirect::back()->withInput()->withErrors(['email' => 'This email is already registered']);
        }

        // Create a new Cart and associate it with the customer
        $cart = new Cart();
        $cart->save();

        $user = new User();

        $user->email = $request->email;
        $user->password = $request->password;
        //$customer->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->admin = false;
        $user->cart_id;

        $user->cart_id = $cart->id;

        $user->save();

//        $credentials = [
//            'email' => $user->email,
//            'password' => $user->password,
//        ];

        Auth::login($user);

//        Auth::attempt($credentials);

//        if (Auth::attempt($credentials)) {
//
////            return redirect('/')->with('success', 'login');
//        }

//        return Redirect::to(route('index'))->with('success', 'Register successfully');

        return redirect(route('index'))->with('success', 'Register sucessfully');
//        return back()->with('success', 'Register sucessfully');


//        // Create a new Cart and associate it with the customer
//        $cart = new Cart();
//        $cart->save();
//
////        $user = new User();
//        $customer = new Customer();
//
//        $customer->email = $request->email;
//        $customer->password = $request->password;
//        //$customer->password = Hash::make($request->password);
//        $customer->phone = $request->phone;
//        $customer->admin = false;
//        $customer->cart_id;
//
//        $customer->cart_id = $cart->id;
//        $customer->save();
//
//        return back()->with('success', 'Register sucessfully');
    }


}
