<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Compromiso
 */
class Compromiso extends Model
{

    public $timestamps = false;

    protected $hidden = ['id'];
    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    protected $guarded = [];

    public function eventos(){
        return $this->hasMany('App\Evento');
    }

        
}