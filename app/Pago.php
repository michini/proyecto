<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 */
class Pago extends Model
{

    public $timestamps = true;

    protected $fillable = [
        'monto',
        'contrato_id',
        'contrato_evento_id'
    ];

    protected $guarded = [];

        
}