<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['username' => 'gmoreno', 'password' => bcrypt(123456), 'nombres' => 'Gilmar', 'paterno' => 'moreno', 'materno' => 'mejia', 'fecha_hora' => date('Y-m-d H:i:s') ]);        
    }
}
