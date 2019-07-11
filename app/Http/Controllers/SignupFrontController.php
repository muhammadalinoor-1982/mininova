<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupFrontController extends Controller
{
    public function signup()
    {
        return view('Front/authentication/signup');
    }
    public function signin()
    {
        return view('Front/authentication/signin');
    }
    public function forgotpassword()
    {
        return view('Front/authentication/forgotpassword');
    }
}
