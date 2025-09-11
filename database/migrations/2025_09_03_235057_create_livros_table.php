<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('resumo')->nullable();
            $table->string('autor');
            $table->integer('numero_paginas');
            $table->year('ano_publicacao');
            $table->foreignId('categoria_livro_id');
            $table->integer('quantidade_total');
            $table->integer('quantidade_disponivel');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
