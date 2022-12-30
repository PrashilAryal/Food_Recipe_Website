<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
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
            'name' => $this->faker->text(10),
            'photo' => $this->faker->text(30),
            'ingredients' => $this->faker->text(50),
            'description' => $this->faker->text(50),
            'cooking_time' => $this->faker->numberBetween(10,50),
            'chef_id' => $this->faker->numberBetween(1,10),
        ];
    }
}