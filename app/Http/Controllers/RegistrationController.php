<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer; // Import the Customer model

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('UserReg'); // Make sure 'UserReg' Blade view exists
    }

    public function register(Request $request)
    {
        // Handle user registration
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customers', // Update to 'customers' table
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create and save the user
        $customer = new Customer([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        $customer->save();

        // Log in the user (optional)
        auth()->login($customer);

        // Redirect to a success page
        return redirect('/index');
    }
}
