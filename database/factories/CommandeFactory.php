<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'produit_id' => function() {
                return Produit::all()->random();
            },
            'client_id' => function() {
                return Client::all()->random();
            },
            'description' => $this->faker->paragraph,
        ];
    }
}
