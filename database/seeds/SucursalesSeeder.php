<?php

use Illuminate\Database\Seeder;

class SucursalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursales')->insert([
            'nombre' => 'PRINCIPAL',
            'pais'=>'s/n',
            'provincia'=>'s/n',
            'ciudad' => 's/n',
            'direccion'=>'s/n',
            'telefono'=>'s/n',
            'email'=>'s/n',
            'responsable'=>'s/n',
            'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ]);
    }
}
