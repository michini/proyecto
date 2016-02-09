<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contrato
 */
class Contrato extends Model
{

    public $timestamps = false;
    protected $table = 'contratos';
    protected $fillable = [
        'fecha',
        'evento_id',
        'user_id',
        'cliente_id'
    ];

    protected $guarded = [];

        
}