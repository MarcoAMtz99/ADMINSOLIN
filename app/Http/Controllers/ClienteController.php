<?php

namespace App\Http\Controllers;

use App\cliente;
use App\Cotizacion;
use App\Direccion;
use App\DatosFiscales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use File;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class ClienteController extends Controller
{   
     // protected $redirectTo = '/cliente';
     use RegistersUsers;
    //   public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    public function index()
    {
        //
         return view('clientes.dashboard');
    }

    public function create()
    {
        //
         return view('clientes.registro');

    }


    public function store(Request $request)
    {
        //
       
       $errors = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'paterno' => ['required', 'string', 'max:255'],
            'materno' => ['required', 'string', 'max:255'],
            'rfc' => ['required', 'string', 'max:14'],
            'celular' => ['required', 'numeric'],
            'telefono' => ['required', 'numeric'],
            'ine_front' => ['required','image','mimes:jpeg,png,jpg','max:9000'],
            'ine_back' =>['required','image','mimes:jpeg,png,jpg','max:9000'] ,
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
       try {
           // CREAMOS EL USUARIO EN DB
             $usuario =User::create([
              'name' => $request->name,
                 'email' => $request->email,
                'password' => Hash::make($request->password),
                ])->assignRole('cliente');

                //SE CREA UN EVENTO QUE MANDARA UN CORREO DE VERIFICACION
                 event(new Registered($user = $usuario));
                  // QUITAMOS LOS ESPACIOS EN EL NOMBRE PARA EVITAR ERRORES DE ROUTING
                  $aux = str_replace(' ','',$request->name);

                  // FORMAMOS EL NOMBRE DEL DIRECTORIO CON EL ID_USER Y NOMBRES 
                  // 
                 $directory = $usuario->id.'_'.$aux.'_'.$request->paterno.'_'.$request->materno;
                 $path_1= 'public/clientes/'.$directory;
                     // AQUI GUARDAMOS AMBOS ARCHIVOS A LA CARPETA DEL USUARIO
                    // 
               $file1 = $request->ine_front->store($path_1);
               $file2 = $request->ine_back->store($path_1);
                    // CADA FILE NOS REGRESA EL PATH DE DICHO ARCHIVO
               
                 $url1 = Storage::url($file1);
                 $url2 = Storage::url($file2);
                    // dd($url1,$url2);
                    // SE LE ASIGNA EL ROL DE CLIENTE POR DEFECTO
                    // PASAMOS A CREAR EL CLIENTE CON LOS DATOS DEL USUARIO
       
                Cliente::create([
                    'user_id'=>$usuario->id,
                    'nombre'=>$request->name,
                    'paterno'=>$request->paterno,
                    'materno'=>$request->materno,
                    'rfc'=>$request->rfc,
                    'telefono'=>$request->telefono,
                    'celular'=>$request->celular,
                    'Ine_front'=>$url1,
                    'Ine_back'=> $url2
                ]);
                // return '/login';
                $mensaje = "POR FAVOR VERIFICA TU EMAIL E INICIA SESION";
                return redirect()->route('login')->with('mensaje',$mensaje);
             // return view('clientes.dashboard',compact('usuario'));
       } catch (Exception $e) {
           return back()->withInput();
       }
        // dd($request,$errors);
       
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
     public function inicio()
    {
        return view('Static.inicio');
    }

     public function contacto()
    {
        return view('Static.contacto');
    }

     public function faqs()
    {
        return view('Static.faqs');
    }

     public function nosotros()
    {
        return view('Static.nosotros');
    }

     public function rastrear()
    {
        return view('Static.rastreo');
    }

     public function login()
    {
        return view('Static.login');
    }

}
