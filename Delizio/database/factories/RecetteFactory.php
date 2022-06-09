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
            'summary' => $this->faker->text(),
            'description' => $this->faker->text(),
            'likes' => $this->faker->numberBetween(0,400),
            'temps_cuisson' => $this->faker->numberBetween(0,60),
            'temps_preparation' => $this->faker->numberBetween(0, 60),
            'temps_repos' => $this->faker->numberBetween(0, 10),
            'budget' => $this->faker->numberBetween(0, 30),
            'defficulte' => $this->faker->name(),
            'video' => $this->faker->url(),
            'images' => $this->faker->imageUrl()

        ];
        }
}