<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contrato
 */
class Contrato extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'fecha',
        'evento_id',
        'user_id',
        'cliente_id'
    ];

    protected $guarded = [];

        
}