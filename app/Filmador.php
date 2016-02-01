<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Filmadore
 */
class Filmador extends Model
{

    protected $table ='filmadores';
    protected $fillable = [
        'nombre',
        'apellido',
        'celular',
        'direccion'
    ];

    public function eventos(){
        return $this->belongsToMany('App\Evento');
    }

}