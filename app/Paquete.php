<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paquete
 */
class Paquete extends Model
{

    public $timestamps = true;

    protected $hidden = ['id'];
    protected $fillable = [
        'tipo',
        'precio',
        'descripcion'
    ];

    protected $guarded = [];

    public function eventos(){
        return $this->hasMany('App\Evento');
    }

        
}