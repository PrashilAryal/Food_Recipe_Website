<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Recipe;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('recipe_name');
            $table->string('recipe_photo')->nullable();
            $table->string('recipe_ingredients');
            $table->string('recipe_description', 2000);
            $table->string('recipe_steps', 2000);
            $table->string('recipe_cooking_time');
            $table->string('recipe_type');
            $table->unsignedBigInteger('chef_id')->nullable();
            $table->foreign('chef_id')->references('id')->on('chefs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
};