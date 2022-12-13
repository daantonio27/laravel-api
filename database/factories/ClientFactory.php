<?php

namespace Database\Factories;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'adresse' => $this->faker->address,
            'email' => $this->faker->unique()->safeEmail(),
            /*'produit_id' => function() {
                return Produit::all()->random();
            },*/
        ];
    }
}
