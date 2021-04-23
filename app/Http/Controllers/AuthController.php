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
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
            'work' => 'required|alpha',
        ]);
        $user= new User($validaterequest);
            $user->password=Hash::make($user->password);
            $user->save();
        
            return redirect()->back();
    }
    public function handleLogin()
    {

        $validaterequest = request()->validate([

            'email' => 'required',
            'password' => 'required|min:8',

            
        ]);
        $user=User::where(["email"=>request()->email])->first();
        if($user==null){
            return("Email not found");
        }
        $user_verified=Hash::check(request()->password,$user->password);
        Auth::login($user);
    }
}
