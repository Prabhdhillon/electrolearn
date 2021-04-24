<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function register(){
        return view("admin.register");
    }
    public function handleRegister(){
        $validatedRequest=request()->validate([
            "name"=>'required|',
            "email"=>'required|email|unique:admins',
            'password' => 'required|min:8|'
        ]);
            
        $admin=new Admin($validatedRequest);
        $admin->password=Hash::make($admin->password);
        $admin->save();
        return redirect()->back()->with('message', 'Your Are Registered!');
        
        
    }
    public function login(){
        return view("admin.login");
    }
    public function handleLogin(){
        return view("admin.login");
    }

}
