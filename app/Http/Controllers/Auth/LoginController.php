<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }
    //Sobreescribimos el metodo redirect para evaluar el tipo de usuario y a donde lo mandaremos despues
    public function redirectPath(){
       // dd('Hola');
       if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('empleado')) {
           return '/home';
       }else{

            return '/cliente';
       }
        
        
       
    }
}
