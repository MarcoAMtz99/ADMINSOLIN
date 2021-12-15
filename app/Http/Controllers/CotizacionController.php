<?php

namespace App\Http\Controllers;

use App\Cotizacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CotizacionController extends Controller
{
   
    public function index()
    {
        
    }

   
    public function create()
    {
        
    }
    public function store(Request $request)
    {       $validator =Validator::make($request->all(), [
            'cp_origen' => ['required', 'numeric'],
            'cp_destino' => ['required', 'numeric'],
            'largo' => ['required', 'numeric'],
            'ancho' => ['required', 'numeric'],
            'alto' => ['required', 'numeric'],
            'peso' => ['required', 'numeric'],
            'tipo_paquete' =>['required', 'numeric']
            
        ]);
             if ($validator->fails()) {
            return redirect('cliente/cotizar')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $cotizacion = Cotizacion::create($request->all());
            $cotizacion->save();

            return redirect('cliente/cotizar');
        }
        

       
    }

   
    public function show(Cotizacion $cotizacion)
    {
        
    }

  
    public function edit(Cotizacion $cotizacion)
    {
        
    }

   
    public function update(Request $request, Cotizacion $cotizacion)
    {
        
    }

  
    public function destroy(Cotizacion $cotizacion)
    {
        
    }
     
}
