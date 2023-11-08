<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;

class AuthenticationController extends Controller {
    public function Login()
    {
        return view('Login');
    }
    public function LoginPost(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {

            return redirect('Login')->with('success', 'Login');
        }

        return back()->with('error', 'Email or phone');
    }

}
