<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        return redirect()->back()->with('success', 'Your Are Registered!');
        
        
    }
    public function login(){
        return view("admin.login");
    }
    public function handleLogin(){
        $validatedRequest=request()->validate([
            "email"=>'required',
            "password"=>'required|min:8'
        ]);
        $user=Admin::where(["email"=>request()->email])->first();
        if($user==null){
            return("Email not found");
        }
        $user_verified=Hash::check(request()->password,$user->password);
        Auth::login($user);
    }


    public function change_password(){
        return view("admin.changepwd");
    }
    public function handlePassword(){
        $validatedRequest=request()->validate([
            'new_password' => 'required|min:8|confirmed',
            'new_password_confirmation' => 'required|min:8'
        ]);
        $admin=new Admin($validatedRequest);
        // $admin->new_password=Hash::make($admin->password);
        

}
}