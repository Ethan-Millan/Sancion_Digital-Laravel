<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sancion extends Model
{
    protected $table = 'sanciones';
    
    protected $fillable = [
        'alumno_id',
        'vigilante_id',
        'multa_id',
        'descripcion',
        'pagada'
    ];

    public function alumno(){
        return $this->belongsTo(User::class, 'alumno_id');
    }

    public function vigilante(){
        return $this->belongsTo(User::class, 'vigilante_id');
    }

    public function multa(){
        return $this->belongsTo(Multa::class, 'multa_id');
    }
}
