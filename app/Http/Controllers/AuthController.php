<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'email' => 'required',
            'password' => 'required|min:8||confirmed',
            'confirm-password' => 'required|min:8',
            'work' => 'required|alpha',
        ]);
        dd($validaterequest);
    }
    public function handleLogin()
    {

        $validaterequest = request()->validate([

            'email' => 'required',
            'password' => 'required|min:8',

        ]);
        dd($validaterequest);
    }
}
