<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CategoriaLivro;
use App\Models\Reserva;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Livro extends Model
{
    
    use HasFactory;
    use SoftDeletes;

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }

    public function categoriaLivro()
    {
        return $this->belongsTo(CategoriaLivro::class);
    }
    
}
