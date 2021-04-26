<?php

namespace Database\Seeders;

use App\Models\Todos;
use Database\Factories\TodosFactory;
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
        Todos::factory()->count(5)->create();
    }
}
