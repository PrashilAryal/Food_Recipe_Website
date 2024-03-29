<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Chef;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chefs', function (Blueprint $table) {
            $table->id();
            $table->string('chef_name');
            $table->string('chef_profile_photo')->default('images/profilePicture.png')->nullable();
            $table->string('chef_cover_photo')->default('images/coverPicture.jpg')->nullable();
            $table->string('chef_email')->unique();
            $table->string('chef_password');
            $table->string('chef_phone_num');
            $table->string('chef_address');
            $table->integer('chef_total_recipes')->default(0)->nullable();
            $table->string('chef_role')->default('chef');
            $table->string('remember_token')->nullable();
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
        Schema::dropIfExists('chefs');
    }
};