<?php

namespace App\Http\Controllers;

use App\Models\Chef;
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
    public function profile(){
        // return view('profile');
        $id = '4';
        $data = Chef::find($id);
        return view('profile', ['data'=>$data]);
    }
    public function about(){
        return view('about');
    }
}