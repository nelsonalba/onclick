<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cancha extends Model
{
    use HasFactory;
    
    public function centroDeportivo(){
        return $this->belongsTo('App\Models\CentroDeportivo');
    }

    public function reserva(){
        return $this->hasMany('App\Models\Reserva');
    }
} 
