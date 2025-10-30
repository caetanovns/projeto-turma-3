<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CategoriaLivro;
use App\Models\Reserva;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Livro extends Model implements \App\Interfaces\Selectable
{
    
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'titulo',
        'autor',
        'editora',
        'ano_publicacao',
        'quantidade_total',
        'quantidade_disponivel',
        'categoria_livro_id',
    ];

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }

    public function categoriaLivro()
    {
        return $this->belongsTo(CategoriaLivro::class);
    }

    public function getSelectLabel(): string
    {
        return $this->titulo;
    }

    public function getSelectId(): int
    {
        return $this->id;
    }
    
}
