<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = User::create([
            'username'  => 'admin',
            'nombres'      =>  'Administrador',
            'email'     =>  'admin@hotmail.com',
            'password'  => bcrypt('1234'),
        ]);

        $usuario = User::create([
            'username'  => 'siulacio',
            'nombres'      =>  'Luis Palacio',
            'email'     =>  'standar@hotmail.com',
            'password'  => bcrypt('1234'),
        ]);
    }
}
