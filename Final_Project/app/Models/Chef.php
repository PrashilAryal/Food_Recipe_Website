<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'chefs';
    protected $fillable = ['chef_name', 'chef_profile_photo', 'chef_cover_photo', 'chef_email', 'chef_password', 'chef_phone_num', 'chef_address', 'chef_total_recipes', 'chef_role'];

    public function recipes(){
        return $this->hasMany(Recipe::class);
    }
}

?>