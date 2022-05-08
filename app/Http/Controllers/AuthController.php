<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            "email" => ["required", "email", "string"],
            "password" => ["required"]
        ]);

        if(auth('admin')->attempt($data)) {
            return redirect(route('home'));
        }

        return redirect(route('login'))->withErrors(["email" => "User not found or data entered incorrectly"]);
    }

    public function logout()
    {
        auth('admin')->$this->logout();

        return redirect('home');
    }
}
