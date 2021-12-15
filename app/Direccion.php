<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    //
    protected $fillable=[
    	'id',
    	'cliente_id',
		'calle',
		'num_ext',
		'num_int',
		'colonia',
		'cp',
		'ciudad',
		'pais', 
		'alc_mun',
		'destinatario',
		'telefono'

    ];
    public function cliente()
			{
			  return $this->belongsTo('App\cliente','id','cliente_id');
			}
}
