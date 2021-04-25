<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function register()
    {
        return view("admin.register");
    }
    public function handleRegister()
    {
        $validatedRequest = request()->validate([
            "name" => 'required|',
            "email" => 'required|email|unique:users',
            'password' => 'required|min:8|'
        ]);

        $admin = new User($validatedRequest);
        $admin->is_instructor = true;
        $admin->password = Hash::make($admin->password);
        $admin->save();
        return redirect()->back()->with('success', 'Your Are Registered!');
    }
    public function login()
    {
        return view("admin.login");
    }
    public function handleLogin()
    {
        $validatedRequest = request()->validate([
            "email" => 'required',
            "password" => 'required|min:8'
        ]);
        $userDoesNotExist = User::where('email', $validatedRequest["email"])->count() == 0;
        if ($userDoesNotExist) {
            return redirect()->back()->with("error", "Wrong Email or Password");
        };

        $admin = User::where('email', $validatedRequest["email"])->first();

        $passwordVerified = Hash::check($validatedRequest["password"], $admin->password);
        if (!$passwordVerified) {
            return redirect()->back()->with("error", "Wrong Email or Password");
        }
        Auth::login($admin);
        return redirect('/admin/home');
    }


    public function change_password()
    {

        return view("admin.changepwd");
    }
    public function handlePassword()
    {
        $validatedRequest = request()->validate([
            'new_password' => 'required|min:8|confirmed',
            'new_password_confirmation' => 'required|min:8'
        ]);
        $admin = new User($validatedRequest);
        // $admin->new_password=Hash::make($admin->password);


    }
}
