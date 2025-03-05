<?php

namespace Database\Seeders;

use App\Models\Casa;
use App\Models\EstadoCasa;
use App\Models\ImagemCasa;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        EstadoCasa::factory(2)->create();

        Casa::factory(10)->create();
        ImagemCasa::factory(10)->create();
    }
}
