<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Chef;
use Illuminate\Http\Request;

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
}