<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function signup()
    {
        return view('Admin/Authentication/signup');
    }
    public function signin()
    {
        return view('Admin/Authentication/signin');
    }
    public function forgotpassword()
    {
        return view('Admin/Authentication/forgotpassword');
    }
}
