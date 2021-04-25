<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $users = User::get();
        return view("admin.profile")->with("users", $users);
    }
    public function edit_profile()
    {
        return view("admin.editprofile");
    }
    public function update_profile()
    {
        $users = User::first();
        $users->name = request()->input('name');
        $users->save();
        return redirect()->back()->with("success", "Values Updated!");
    }
}
