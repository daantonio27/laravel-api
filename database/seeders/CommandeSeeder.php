<?php

namespace Database\Seeders;

use App\Models\Commande;
use Illuminate\Database\Seeder;

class CommandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Commande::factory()->times(100)->create();
    }
}
