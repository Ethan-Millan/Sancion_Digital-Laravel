<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Multa extends Model
{
    protected $fillable = [
        'nombre_multa',
        'descripcion_multa',
        'hora_infraccion'
    ];

    public function sanciones(){
        return $this->hasMany(Sancion::class, 'multa_id');
    }
}
