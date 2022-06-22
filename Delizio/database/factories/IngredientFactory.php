<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IngredientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ingredient' => $this->faker->name(),
            'quantite' => $this->faker->numberBetween(0, 10),
            'key'=> $this->faker->numberBetween(1351353543,45343535),
        ];
    }
}