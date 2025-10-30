<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reserva;
use App\Models\User;

class Aluno extends Model implements \App\Interfaces\Selectable
{
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }

    public function getSelectLabel(): string
    {
        return $this->user->name;
    }
    
    public function getSelectId(): int
    {
        return $this->id;
    }

}
