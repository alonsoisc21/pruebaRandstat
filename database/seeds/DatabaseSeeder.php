<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
    	 DB::table('users')->insert([
            'name' => 'Adalid',
            'email' => 'czanabri@inttelmex.com.mx',
            'password' => Hash::make('czanabri'),
        ]);
	 	DB::table('users')->insert([
	        'name' => 'Vianet',
	        'email' => 'vmalvare@inttelmex.com.mx',
	        'password' => Hash::make('vmalvare'),
	    ]);
	 	DB::table('tareas')->insert([
	        'descripcion' => 'Revisar prueba técnica',
	        'estado' => 'Pendiente',
	    ]);
	}
}
