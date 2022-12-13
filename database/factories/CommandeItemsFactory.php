<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Commande;
use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommandeItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'prix' => $this->faker->numberBetween(100,1000),
            'quantite' => $this->faker->randomDigit,
            'commande_id' => function() {
                return Commande::all()->random();
            },
            'produit_id' => function() {
                return Produit::all()->random();
            },
        ];
    }
}
