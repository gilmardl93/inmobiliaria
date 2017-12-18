<?php

use Illuminate\Database\Seeder;
use App\Models\ContactosInfo;

class ContactosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactosInfo::create(['direccion' => 'Gilmar', 'email1' => 'gilmarmoreno1993@gmail.com', 'email2' => 'gilmarmoreno1993@gmail.com', 'telefono1' => '972255980', 'telefono2' => '972255980']);
    }
}
