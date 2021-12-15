<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    //
    
    protected $fillable=[
    	'id',
    	'user_id',
		'nombre',
		'paterno',
		'materno',
		'rfc',
		'telefono',
		'celular',
		'Ine_front',
		'Ine_back'
    ];


    public function user(){
			return $this->belongsTo('App\User');
		}

	public function cotizaciones() {
            return $this->hasMany('App\Cotizacion','cliente_id','id');
        }
        
    public function direcciones() {
            return $this->hasMany('App\Direccion','cliente_id','id');
        }
    public function datosfiscales() {
            return $this->hasMany('App\DatosFiscales','cliente_id','id');
        }

    
}
