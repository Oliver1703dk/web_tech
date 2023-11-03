<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function UserReg()
    {
        return view('UserReg');
    }
    public function UserRegPost(Request $request)
    {

        // Create a new Cart and associate it with the customer
        $cart = new Cart();
        $cart->save();

//        $user = new User();
        $customer = new Customer();

////        $user->name = $request->name;
//        $user->email = $request->email;
//        $user->password = Hash::make($request->password);
//        //$user->phone_number = $request->phone_number;
        $customer->email = $request->email;
        $customer->password = Hash::make($request->password);
        $customer->phone = $request->phone;
        $customer->admin = false;
        $customer->cart_id = 1;


        $customer->save();




        // Set the customer's cart_id to the newly created cart's ID
        $customer->cart_id = $cart->id;
        $customer->save();



        return back()->with('sucess', 'Register sucessfully');
    }
}
