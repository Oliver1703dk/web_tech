<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class ProfileController extends Controller
{
    public function showProfile()
    {
        $user = auth()->user();
        $userEmail = $user->email;

        return view('profile', [
            'user' => $user,
            'userEmail' => $userEmail
        ]);
    }

    public function changePassword(Request $request)
    {
        $user = Auth::user();
        $newPassword = $request->input('new_password');

        $user->password = Hash::make($newPassword);
        $user->save();

        return redirect('/')->with('success', 'Password changed successfully. Please log in again.');
    }
}
