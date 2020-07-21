<?php

use Illuminate\Database\Seeder;

class ProveedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedores')->insert([
            'ruc' => '9999999999',
            'razonsocial'=>'Sin Proveedor',
            'nombreresponsable'=>'sin responsable',
            'telefono'=>'s/n',
            'celular'=>'s/n',
            'email' => 's/n',
            'ciudad'=>'s/n',
            'provincia'=>'s/n',
            'direccion'=>'s/n',
            'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ]);
    }
}
