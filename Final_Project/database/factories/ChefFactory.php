<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chef>
 */
class ChefFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'chef_name' => $this->faker->name(),
            'chef_email' => $this->faker->email(),
            'chef_password' => $this->faker->text(10),
            'chef_phone_num' => $this->faker->phoneNumber(10),
            'chef_address' => $this->faker->text(10),
            'chef_total_recipes' => $this->faker->numberBetween(1,10),
            'chef_profile_photo' => $this->faker->text(30),
            'chef_cover_photo' => $this->faker->text(30),
            'chef_role' => 'chef',
        ];
    }
}