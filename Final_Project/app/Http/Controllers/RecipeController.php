<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Chef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as Session;


class RecipeController extends Controller
{
    //
    public function save_recipe(Request $req){
        // dd($req->all());
        $req->validate([
            'recipe_name' => 'required',
            'recipe_photo' => 'required',
            'recipe_type' => 'required',
            'recipe_ingredients' => 'required',
            'recipe_description' => 'required',
            'recipe_steps' => 'required',
            'recipe_cooking_time' => 'required',
            'chef_id' => 'required'
        ]);
        if($req->hasFile('recipe_photo'))
        {
            $photo = $req->file('recipe_photo');
            $filePath = $photo->store('images', 'public');
            Recipe::Create([
                'recipe_name' => $req->recipe_name,
                'recipe_photo' => $filePath,
                'recipe_type' => $req->recipe_type,
                'recipe_description' => $req->recipe_description,
                'recipe_steps' => $req->recipe_steps,
                'recipe_ingredients' => $req->recipe_ingredients,
                'recipe_cooking_time' => $req->recipe_cooking_time,
                'chef_id' => $req->chef_id
            ]);
        }
        $chefObj = Chef::find($req->chef_id);
        $total = $chefObj->chef_total_recipes;
        $chefObj->chef_total_recipes = $total+1;
        $chefObj->save();

        return redirect()->route('profile');
    }
    public function recipesearch(Request $request)
  {
    $query = $request->input('recipesearch');

    $posts = Recipe::where('recipe_name', 'like', '%'.$query.'%')
                 ->orWhere('recipe_description', 'like', '%'.$query.'%')
                 ->get();

    return view('searchpage', compact('posts', 'query'));
  }

  public function delete_recipe($id){
    $delobj = Recipe::find($id);
    $delobj ->delete();
    $chefs= Recipe::all();
    $user = Session::get('userid');
    $data = Chef::find($user);
    $password = bcrypt($data->chef_password);
    $myRecipes = Recipe::all();
    $chefObj = Chef::find($user);
    $total = $chefObj->chef_total_recipes;
    $chefObj->chef_total_recipes = $total-1;
    $chefObj->save();
    // return redirect()->route('profile', compact('data', 'password', 'myRecipes'));

    return view('profile', compact('data','password', 'myRecipes'));
  }
  public function update_recipe(Request $req){
        $recipeObj = Recipe::find($req->id);
        $recipeObj->recipe_name = $req->recipe_name;
        $recipeObj->recipe_ingredients = $req->recipe_ingredients;
        $recipeObj->recipe_description = $req->recipe_description;
        $recipeObj->recipe_steps = $req->recipe_steps;
        $recipeObj->recipe_cooking_time = $req->recipe_cooking_time;
        $recipeObj->recipe_type = $req->recipe_type;


        $recipeObj->save();

        return redirect()->route('profile');
  }
}