<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view("register");
    }
    public function login()
    {
        return view("login");
    }
    public function handleRegister()
    {
        // $formdata = request()->except("_token");
        // dd($formdata);
        $validaterequest = request()->validate([
            'name' => 'required|min:3|max:120 ',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
        ]);
        $user = new User($validaterequest);
        $user->password = Hash::make($user->password);
        $user->save();

        return redirect()->back()->with('success', 'Your Are Registered!');
    }
    public function handleLogin()
    {

        $validatedRequest = request()->validate([
            'email' => 'required',
            'password' => 'required|min:8',
        ]);

        $userDoesNotExist = User::where('email', $validatedRequest['email'])->count() == 0;
        if ($userDoesNotExist) {
            return redirect()->back()->with("error", "wrong email / password");
        }

        $user = User::where('email', $validatedRequest['email'])->first();

        $passwordVerified = Hash::check($validatedRequest['password'], $user->password);

        if (!$passwordVerified) {
            return redirect()->back()->with("error", "wrong email / password");
        }

        if ($user->is_instructor) {
            return redirect("/admin/login");
        }

        Auth::login($user);
        return redirect('/');
    }
}
