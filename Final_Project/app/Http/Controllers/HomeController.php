<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Recipe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function welcome(){
        return view('welcome', ['recipesAll'=>Recipe::all()]);
    }
    public function register(){
        return view('register');
    }
    public function adminpanel(){
        $item = Chef::all();
        return view('adminpanel', ['chefs'=>$item]);;
    }
    public function login(){
        return view('login');
    }
      public function adminlogin(){
        return view('adminlogin');
    }
     public function mainlogin(){
        return view('mainlogin');
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
    public function contactPage(){
        return view('contact');
    }
    public function recipe(){
        return view('Recipe');
    }
}