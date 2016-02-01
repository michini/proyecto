<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 */
class Cliente extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'apellido',
        'celular',
        'direccion',
        'familia'
    ];

    protected $guarded = [];

        
}