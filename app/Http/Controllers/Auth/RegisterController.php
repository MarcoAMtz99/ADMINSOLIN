<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\cliente;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use File;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
     protected $redirectTo = '/cliente';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
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
    }

    protected function create(array $data)
    {   

        // CREAMOS EL USUARIO EN DB
        $usuario =User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ])->assignRole('cliente');

                  // QUITAMOS LOS ESPACIOS EN EL NOMBRE PARA EVITAR ERRORES DE ROUTING
                  $aux = str_replace(' ','',$data['name']);

                  // FORMAMOS EL NOMBRE DEL DIRECTORIO CON EL ID_USER Y NOMBRES 
                  // 
                 $directory = $usuario->id.'_'.$aux.'_'.$data['paterno'].'_'.$data['materno'];
                 $path_1= 'public/clientes/'.$directory;
                     // AQUI GUARDAMOS AMBOS ARCHIVOS A LA CARPETA DEL USUARIO
                    // 
               $file1 = $data['ine_front']->store($path_1);
               $file2 = $data['ine_back']->store($path_1);
                    // CADA FILE NOS REGRESA EL PATH DE DICHO ARCHIVO
               
                 $url1 = Storage::url($file1);
                 $url2 = Storage::url($file2);
                    // dd($url1,$url2);
                    // SE LE ASIGNA EL ROL DE CLIENTE POR DEFECTO
                    // PASAMOS A CREAR EL CLIENTE CON LOS DATOS DEL USUARIO
       
                Cliente::create([
                    'user_id'=>$usuario->id,
                    'nombre'=>$data['name'],
                    'paterno'=>$data['paterno'],
                    'materno'=>$data['materno'],
                    'rfc'=>$data['rfc'],
                    'telefono'=>$data['telefono'],
                    'celular'=>$data['celular'],
                    'Ine_front'=>$url1,
                    'Ine_back'=> $url2
                ]);

        return $usuario;


    }

    
}
