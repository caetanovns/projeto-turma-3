<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Livro;
use App\Models\Aluno;
use App\Models\ReservaStatus;

class Reserva extends Model
{
    
    protected $fillable = [
        'aluno_id',
        'livro_id',
        'data_reserva',
        'data_devolucao',
        'reserva_status_id',
    ];

    public function livro()
    {
        return $this->belongsTo(Livro::class);
    }

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function status()
    {
        return $this->belongsTo(ReservaStatus::class, 'reserva_status_id');
    }
}
