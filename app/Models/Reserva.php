<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Livro;
use App\Models\Aluno;
use App\Models\ReservaStatus;

class Reserva extends Model
{
    
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
        return $this->belongsTo(ReservaStatus::class);
    }
}
