<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $Usuarios= User::all();
        
        return view('Usuarios.index',['usuarios'=> $Usuarios]);
    }


    public function create()
    {
        //OBTENEMOS TODOS LOS ROLES 
        $Roles = Role::all();
        return view('Usuarios.create',['Roles'=>$Roles]);
    }

  
    public function store(Request $request)
    {
      
      
         $validator = Validator::make($request->all(), [
            'name' => 'required|min:6','max:25','string',
            'password' => 'required|min:6',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users,email',
            'role' => 'required', 'numeric',
        ]);
         if ($validator->fails()) {
            return redirect('users/create')
                        ->withErrors($validator)
                        ->withInput();
        }else{
        // CREAMOS EL USUARIO EN DB
        // BUSCAMOS EL ROL A ASIGNAR EN LA DB
        $Role = Role::find($request->role);
        // dd( $Role->name);
        $usuario =User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'email_verified_at'=>Carbon::now()
        ])->assignRole($Role->name);
           
         //REDIRIGIMOS AL INDEX
          return redirect('/users');
       
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $usuario = User::find($id);
         $usuario->delete();

         return redirect('/users');
    }
}
