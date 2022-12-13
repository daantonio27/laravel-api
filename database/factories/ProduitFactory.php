<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'slug' => $this->faker->paragraph,
            'prix' => $this->faker->numberBetween(100,1000),
            'stock' => $this->faker->randomDigit,
        ];
    }
}
