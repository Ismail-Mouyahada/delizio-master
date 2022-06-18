<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RecetteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'main_image' => $this->faker->imageUrl(),
            'title' => $this->faker->name(),
            'categorie' => $this->faker->name(),
            'summary' => $this->faker->text(),
            'tag' => $this->faker->name(),
            'ingredient' => $this->faker->name(),
            'quantite' => $this->faker->numberBetween(0, 400),
            'description' => $this->faker->text(),
            'likes' => $this->faker->numberBetween(0, 400),
            'temps_cuisson' => $this->faker->numberBetween(0, 60),
            'temps_preparation' => $this->faker->numberBetween(0, 60),
            'calories' => $this->faker->numberBetween(0, 100),
            'gras' => $this->faker->numberBetween(0, 100),
            'proteines' => $this->faker->numberBetween(0, 100),
            'cholesterole' => $this->faker->numberBetween(0, 100),
            'budget' => $this->faker->numberBetween(0, 50),
            'difficulte' => $this->faker->numberBetween(1, 3),
            'video' => $this->faker->imageUrl()
        ];
    }
}