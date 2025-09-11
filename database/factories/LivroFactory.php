<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livro>
 */
class LivroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $total = $this->faker->numberBetween(1, 30);
        $categorias = \App\Models\CategoriaLivro::all()->pluck('id');

        return [
            'titulo' => $this->faker->sentence(),
            'resumo' => $this->faker->paragraph(),
            'autor' => $this->faker->name(),
            'numero_paginas' => $this->faker->numberBetween(50, 1000),
            'ano_publicacao' => $this->faker->year(),
            'quantidade_total' => $total,
            'quantidade_disponivel' => $this->faker->numberBetween(1, $total),
            'categoria_livro_id' => $categorias->random(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
