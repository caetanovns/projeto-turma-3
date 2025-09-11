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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aluno_id')->constrained();
            $table->foreignId('livro_id')->constrained();
            $table->foreignId('reserva_status_id')->constrained();
            $table->date('data_reserva');
            $table->date('data_expiracao')->nullable();
            $table->datetime('data_devolucao')->nullable();
            $table->decimal('multa', 8, 2)->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
