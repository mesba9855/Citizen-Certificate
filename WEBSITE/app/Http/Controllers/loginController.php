<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    function LoginIndex(){
        return view('LoginPage');
    }
}
