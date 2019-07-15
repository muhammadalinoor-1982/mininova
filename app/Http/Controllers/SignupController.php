<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function employee_registration()
    {
        return view('Admin/Authentication/employee_registration');
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
