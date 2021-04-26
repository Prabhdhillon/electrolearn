<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function user()
    {
        return User::where("id", auth()->user()->id)->first();
    }
    public function profile()
    {
        $user = $this->user();
        return view("admin.profile")->with("user", $user);
    }
    public function edit_profile()
    {
        $user = $this->user();
        return view("admin.editprofile")->with("user", $user);
    }
    public function update_profile()
    {
        $users = User::where("id", auth()->user()->id)->first();
    }
}
