<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function addsignin()
    {
        return view('Admin/Authentication/signin');
    }
    public function addforgotpassword()
    {
        return view('Admin/Authentication/forgotpassword');
    }
}
