<?php

namespace App\Http\Controllers;

use App\cliente;
use App\Cotizacion;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index()
    {
        //
         return view('clientes.dashboard');
    }

    public function create()
    {
        //
        
    }


    public function store(Request $request)
    {
        //
    }

 
    public function show(cliente $cliente)
    {
        //
    }


    public function edit(cliente $cliente)
    {
        //
    }


    public function update(Request $request, cliente $cliente)
    {
        //
    }

<<<<<<< HEAD
 
=======
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
>>>>>>> 1e6ccccf10dfe92965e8127877a0c3dd131fe2cb
    public function destroy(Request $request)
    {
        $dataClient = cliente::find($request->id);
        $dataClient->delete();

        return view('clientes.datos');
    }

    public function datos_personales(Request $request){
       // dd($request->cliente);
        $client = cliente::find($request->cliente);
        $datos =$client;
        return view('clientes.datos',compact('datos'));
    }
    public function cotizar()
    {
        //
        $Cotizacion = Cotizacion::all();
        return view('clientes.cotizar');
    }
}
