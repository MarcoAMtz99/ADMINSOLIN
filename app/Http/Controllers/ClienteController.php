<?php

namespace App\Http\Controllers;

use App\cliente;
use App\Cotizacion;
use App\Direccion;
use App\DatosFiscales;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    public function historial(Request $request)
    {
        // dd($request->id);
        $cotizaciones = Cotizacion::where('cliente_id',$request->id)->get();

        return view('clientes.historial',['cotizaciones'=>$cotizaciones]);
    }

    public function direcciones(Request $request)
    {
        $direcciones = Direccion::where('cliente_id',$request->id)->get();
        // dd($request,$direcciones);
        return view('clientes.direcciones',['direcciones'=>$direcciones]);
    }

    public function rastreo(Request $request){
        return view('clientes.rastreo');
    }

    public function credito(Request $request){
        return view('clientes.credito');
    }
     public function datosfiscales(Request $request){
       // dd($request->cliente);
        $client = cliente::find($request->cliente);
        // dd($client);
        $datosfiscales = DatosFiscales::where('cliente_id',$client->user_id)->get();
        // dd($datos,$client->user_id);
        return view('clientes.facturacion',compact('datosfiscales'));
    }
}
