<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function login(){

    	return view('login.pages.login');
    }
    public function signup(){

    	return view('login.pages.signup');
    }
    public function forgetPassword(){

    	return view('login.pages.forget-password');
    }
}
