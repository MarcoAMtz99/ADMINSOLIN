<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    //
     protected $fillable=[
    	'id',
    	'cliente_id',
		'tipo_paquete',
		'cp_origen',
		'cp_destino',
		'peso',
		'largo',
		'ancho',
		'alto', 
    ];


    public function cliente()
			{
			  return $this->belongsTo('App\cliente');
			}
}
