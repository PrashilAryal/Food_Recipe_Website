<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function welcome(){
        return view('welcome');
    }
    public function register(){
        return view('register');
    }
     public function login(){
        return view('login');
    }

}