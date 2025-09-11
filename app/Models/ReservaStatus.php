<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reserva;

class ReservaStatus extends Model
{
    

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}
