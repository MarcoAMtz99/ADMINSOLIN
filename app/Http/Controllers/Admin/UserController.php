<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
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
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Factory|Application|View
     */
    public function edit($id)
    {
        $dataUser = User::find($id);
        $Roles = Role::all();

        return view('Usuarios.edit', [
                'Roles' => $Roles,
                'User' => $dataUser,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Application|Factory|View|void
     */
    public function update(Request $request, int $id)
    {
        $User = User::find($id);

        if ($User !== null){
            $User->name = $request->name;
            $User->email = $request->email;
            $User->password = Hash::make($request->password);
            $User->save();
        }

        $Usuarios= User::all();

        return view('Usuarios.index',['usuarios'=> $Usuarios]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function destroy(int $id)
    {


        $dataUser = User::find($id);
        $dataUser->delete();

        $usuarios = User::all();

        return view('Usuarios.index',compact('usuarios'));
    }
}
