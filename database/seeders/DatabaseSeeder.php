<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CategoriaLivroSeeder;
use Database\Seeders\ReservaStatusSeeder;
use App\Models\Livro;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Livro::factory(50)->create();

        /*
        $this->call([
            CategoriaLivroSeeder::class,
            ReservaStatusSeeder::class,
        ]);
        */
    }
}
