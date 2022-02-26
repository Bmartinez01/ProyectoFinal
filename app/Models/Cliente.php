<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable =
    [
    'documento',
    'nombre',
    'apellido',
    'direccion',
    'telefono',
    'email',
    'estado'
    ];

    use HasFactory;
}
