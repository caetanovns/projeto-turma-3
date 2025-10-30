<?php

namespace App\Models;

use App\Interfaces\Selectable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Livro;

class CategoriaLivro extends Model implements Selectable
{
    

    public function livros(): HasMany
    {
        return $this->hasMany(Livro::class);
    }

    public function getSelectLabel(): string
    {
        return $this->nome;
    }

    public function getSelectId(): int
    {
        return $this->id;
    }
    

}
