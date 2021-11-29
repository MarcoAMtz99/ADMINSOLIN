<?php

use Illuminate\Database\Seeder;
use App\User;
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
    }
}
