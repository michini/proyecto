<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 */
class Cliente extends Model
{

    public $timestamps = false;
    protected $table = 'clientes';

    protected $hidden = ['id'];

    protected $fillable = [
        'nombre',
        'apellido',
        'celular',
        'direccion',
        'familia'
    ];

        
}