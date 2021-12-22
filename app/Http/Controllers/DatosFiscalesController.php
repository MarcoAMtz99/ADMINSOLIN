<?php

namespace App\Http\Controllers;

use App\DatosFiscales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DatosFiscalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);

         $validator =Validator::make($request->all(), [
            'calle' => ['required', 'string'],
            'num_ext' => ['required', 'numeric'],
            'num_int' => ['required', 'numeric'],
            'colonia' => ['required', 'string'],
            'cp' => ['required', 'numeric'],
            'ciudad' => ['required', 'string'],
            'pais' =>['required', 'string'],
            'alc_mun' =>['required', 'string'],
            'rfc' =>['required', 'string','min:4'],
            'correo' =>['required', 'string', 'email', 'max:255'],
            'razon_social' =>['required', 'string']
            
        ]);
             if ($validator->fails()) {
            return redirect('direccion/create')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $datosFiscales = DatosFiscales::create($request->all());
            $datosFiscales->save();
            $datos = DatosFiscales::where('cliente_id',$request->cliente_id)->get();

        
            return view('clientes.facturacion',[
                 'id' => $request->cliente_id,'datosfiscales'=>$datos
             ]);
    }
      }

    /**
     * Display the specified resource.
     *
     * @param  \App\DatosFiscales  $datosFiscales
     * @return \Illuminate\Http\Response
     */
    public function show(DatosFiscales $datosFiscales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DatosFiscales  $datosFiscales
     * @return \Illuminate\Http\Response
     */
    public function edit(DatosFiscales $datosFiscales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DatosFiscales  $datosFiscales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DatosFiscales $datosFiscales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DatosFiscales  $datosFiscales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
            // dd($request->cliente_id);
         $datofiscal = DatosFiscales::find($request->id);
         $datofiscal->delete();

        // $usuarios = User::all();
        $datosfiscales = DatosFiscales::where('cliente_id',$request->cliente_id)->get();
        return view('clientes.facturacion',compact('datosfiscales'));
    }
}
