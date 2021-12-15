<?php

use Illuminate\Database\Seeder;
use App\User;
use App\cliente;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
        	'name'=>'Luis Humberto Paniagua',
        	'email'=>'admin@solin.com',
        	'password'=>bcrypt('12345678')
        ])->assignRole('admin');

        $usuario = User::create([
            'name'=>'Cliente de prueba',
            'email'=>'cliente@solin.com',
            'password'=>bcrypt('12345678')
        ])->assignRole('cliente');

        cliente::create([
                    'user_id'=>$usuario->id,
                    'nombre'=>'Cliente',
                    'paterno'=>'de',
                    'materno'=>'prueba',
                    'rfc'=>'XXXX000000123',
                    'telefono'=>'1234567890',
                    'celular'=>'1234567890',
                    'Ine_front'=>'',
                    'Ine_back'=>''
                ]);
    }
}
