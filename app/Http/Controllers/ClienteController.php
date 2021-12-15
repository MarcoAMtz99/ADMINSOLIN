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
