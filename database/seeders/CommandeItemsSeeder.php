<?php

namespace Database\Seeders;

use App\Models\CommandeItems;
use Illuminate\Database\Seeder;

class CommandeItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CommandeItems::factory()->times(100)->create();
    }
}
