<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('registration.create');
    }

    public function createUser(Request $request)
    {


        $request->validate([
            'login' => 'required|unique:users,login',
            'password' => 'required'
        ]);

        $newUser = User::create([
            'login' => $request->login,
            'password' => Hash::make($request->password)
        ]);

        if ($newUser) {
            Auth::login($newUser);
            return redirect()->route('users.index');
        } else {
            return back('registration.show');
        }
    }
}
