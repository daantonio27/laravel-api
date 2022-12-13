<?php

namespace Database\Seeders;

use App\Models\CommandeItems;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(UsersSeeder::class);
        $this->call(ProduitSeeder::class);
        $this->call(CommandeSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(CommandeItemsSeeder::class);
    }
}
