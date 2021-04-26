<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view("admin.profile");
    }
    public function edit_profile()
    {
        return view("admin.editprofile");
    }
    public function update_profile()
    {

        return redirect()->back();
    }
}
