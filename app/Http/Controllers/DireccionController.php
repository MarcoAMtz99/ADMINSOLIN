<?php

namespace App\Http\Controllers;

use App\Direccion;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class DireccionController extends Controller
{
 
    public function index()
    {
        //
    }

    public function create()
    {
        //
        return view('clientes.direccion.create');
    }

 
    public function store(Request $request)
    {
        //
        $validator =Validator::make($request->all(), [
            'calle' => ['required', 'string'],
            'num_ext' => ['required', 'numeric'],
            'num_int' => ['required', 'numeric'],
            'colonia' => ['required', 'string'],
            'cp' => ['required', 'numeric'],
            'ciudad' => ['required', 'string'],
            'pais' =>['required', 'string'],
            'alc_mun' =>['required', 'string'],
            'destinatario' =>['required', 'string','min:4'],
            'telefono' =>['required', 'numeric']
            
        ]);
             if ($validator->fails()) {
            return redirect('direccion/create')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $direccion = Direccion::create($request->all());
            $direccion->save();
            $direcciones = Direccion::where('cliente_id',$request->cliente_id)->get();

        
            return view('clientes.direcciones',[
                 'id' => $request->cliente_id,'direcciones'=>$direcciones
             ]);
        }
    }

   
    public function show(Direccion $direccion)
    {
        //
    }

  
    public function edit(Direccion $direccion)
    {
        //
    }


    public function update(Request $request, Direccion $direccion)
    {
        //
    }

 
    public function destroy(Direccion $direccion)
    {
        //
    }
     
}
