<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Livro;

class CategoriaLivro extends Model
{
    

    public function livros(): HasMany
    {
        return $this->hasMany(Livro::class);
    }
}
