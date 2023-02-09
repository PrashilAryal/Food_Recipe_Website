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
            'recipe_name' => $this->faker->text(10),
            'recipe_photo' => $this->faker->text(30),
            'recipe_ingredients' => $this->faker->text(50),
            'recipe_description' => $this->faker->text(50),
            'recipe_steps' => $this->faker->text(50),
            'recipe_cooking_time' => $this->faker->numberBetween(10,50),
            'recipe_type' => $this->faker->text(10),
            'chef_id' => $this->faker->numberBetween(1,10),
        ];
    }
}