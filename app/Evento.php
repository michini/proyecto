<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Evento
 */
class Evento extends Model
{
    public $timestamps = false;
    protected $table = 'eventos';

    protected $hidden = ['id'];
    protected $fillable = [
        'fecha',
        'lugar',
        'descripcion',
        'estado',
        'paquete_id',
        'compromiso_id'
    ];

    protected $guarded = [];

    public function getEstadoAttribute($estado)
    {
        if($estado==0):
            return "No entregado";
        else:
            return "Entregado";
        endif;
    }

    public function paquete(){
        return $this->belongsTo('App\Paquete');
    }

    public function compromiso(){
        return $this->belongsTo('App\Compromiso');
    }

    public function filmadores(){
        return $this->belongsToMany('App\Filmador');
    }

}