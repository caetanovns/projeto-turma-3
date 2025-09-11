<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ReservaStatus;

class ReservaStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            ['nome' => 'Reservada'],
            ['nome' => 'Emprestada'],
            ['nome' => 'Devolvida'],
            ['nome' => 'Cancelada'],
            ['nome' => 'Atrasada'],
        ];

        foreach ($statuses as $status) {
            ReservaStatus::updateOrCreate(['nome' => $status['nome']],$status);
        }
    }
}
