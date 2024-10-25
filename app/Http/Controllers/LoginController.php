<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //



    public function login(){
        return view('signin');
    }



    public function register(){
        return view('signup');
    }


    public function forgetpassword(){
        return view('forget-password');
    }

    public function details(){
        return view('project-details');
    }
}
