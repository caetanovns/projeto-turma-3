<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CategoriaLivro;
use App\Models\Reserva;
use App\Models\ReservaStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Livro extends Model
{
    
    use HasFactory;

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }

    public function categoria()
    {
        return $this->belongsTo(CategoriaLivro::class);
    }
    
}
