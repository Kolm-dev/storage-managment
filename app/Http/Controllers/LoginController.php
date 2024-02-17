<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        $title = 'Login';

        return view('login', compact('title'));
    }

    public function login(Request $request)
    {
        $credentials = $request->only('login', 'password');
        if (auth()->attempt($credentials)) {
            $user = $request->user();
            $title = 'Welcome';
            return view('welcome', compact('user', 'title'));
        } else {
            return redirect()->route('login.show');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
