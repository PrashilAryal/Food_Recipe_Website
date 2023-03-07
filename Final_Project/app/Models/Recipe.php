<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Recipe extends Model
{
    use HasFactory;
    protected $table = 'recipes';
    protected $fillable = ['recipe_name', 'recipe_photo', 'recipe_type', 'recipe_steps', 'recipe_ingredients', 'recipe_description', 'recipe_cooking_time', 'chef_id'];

    public function chef(){
        return $this->belongsTo(Chef::class);
    }
}