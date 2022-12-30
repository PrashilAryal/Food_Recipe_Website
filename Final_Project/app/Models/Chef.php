<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'photo', 'email', 'password'];

    public function recipes(){
        return $this->hasMany(Recipe::class);
    }
}