<?php

namespace App\Enums;

enum UserRol : string{
    case Administrador = 'administrador';
    case Vigilante = 'vigilante';
    case Alumno = 'alumno';
}