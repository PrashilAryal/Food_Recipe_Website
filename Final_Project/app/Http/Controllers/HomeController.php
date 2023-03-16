<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as Session;

class HomeController extends Controller
{
    //
    public function welcome(){
        session()->put(['adminid']);
        return view('welcome', ['recipesAll'=>Recipe::all()]);
    }
    public function register(){
        return view('register');
    }
    public function adminpanel(){
        
        if((Session::get('adminid')) == null){
            return view('adminlogin');
        }
        $adminObj = Chef::find(Session::get('adminid'));
       if($adminObj->chef_role == 'admin'){
        $item = Chef::all();
            return view('adminpanel', ['chefs'=>$item]);;
       }else{
            return view('adminlogin');

       }
        
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
        // $id = "11";
        $user = Session::get('userid');
        // $id = Auth::chef()->id;
        $data = Chef::find($user);
        $password = bcrypt($data->chef_password);
        $myRecipes = Recipe::all();
        return view('profile', compact('data','password', 'myRecipes'));
    }
    public function edit_recipe($id){
        $data = Recipe::find($id);
        return view('editRecipe', compact('data'));
    }
    public function about(){
        return view('about');
    }
    public function contactPage(){
        return view('contact');
    }
    public function recipe(){
        $Recipes= Recipe::all();
        return view('Recipe',compact('Recipes'));
    }
    public function ViewRecipe($recipeid){
        $RecipesDetails = Recipe::find($recipeid);
        return view('ViewRecipe',compact('RecipesDetails'));
    }
}