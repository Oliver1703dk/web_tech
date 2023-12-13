<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
        $user = auth()->user();

        $validatedData = $request->validate([
            'oldPassword' => 'required|min:8|max:255',
            'newPassword' => 'required|min:8|max:255|confirmed',
        ]);

        if (!$user->checkPassword($validatedData['oldPassword'])) {
            return redirect()->back()->withErrors(['oldPassword' => 'Invalid password.']);
        }

        $user->update(['password' => bcrypt($validatedData['newPassword'])]);

        return redirect()->route('profile');
    }
}
