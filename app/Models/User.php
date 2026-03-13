<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enums\UserRol;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    use HasFactory, Notifiable;

    protected $fillable = [
        'matricula',
        'nombre',
        'apellido_materno',
        'apellido_paterno',
        'email',
        'telefono',
        'rol'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'rol' => UserRol::class
        ];
    }

    public function sanciones(){
        return $this->hasMany(Sancion::class, 'alumno_id');
    }

    public function sanciones_vigilante(){
        return $this->hasMany(Sancion::class, 'vigilante_id');
    }
}
