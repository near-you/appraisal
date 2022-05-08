<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use App\Models\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        auth('admin')->logout();

        return redirect(route('home'));
    }

    public function showForgotForm()
    {
        return view("auth.forgot");
    }

    public function forgot(Request $request)
    {
        $data = $request->validate([
            "email" => ["required", "email", "string", "exists:admin_users"],
        ]);

        $user = AdminUser::where(["email" => $data["email"]])->first();

        $password = uniqid();

        $user->password = bcrypt($password);
        $user->save();

        Mail::to($user)->send(new ForgotPassword($password));

        return redirect(route("home"));
    }
}
