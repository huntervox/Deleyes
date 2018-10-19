<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_usuarios')->insert([
            [
                'nombre' => 'Administrador',
                'tipoDocumento' => 'CC',
                'documento' => '111222333',
                'email' => 'admin@app.com',
                'telefono' => '3144523889',
                'role' => 'admin',
                'password' => Hash::make('123456'),
            ],
            [
                'nombre' => 'Cliente Defecto',
                'tipoDocumento' => 'CC',
                'documento' => '44556677',
                'email' => 'cliente@app.com',
                'telefono' => '3214578123',
                'role' => 'cliente',
                'password' => Hash::make('123456'),
            ]
        ]);
    }
}