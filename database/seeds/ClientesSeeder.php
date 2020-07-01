<?php

use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'ruc' => '9999999999',
            'razonsocial'=>'Consumidor final',
            'telefono'=>'s/n',
            'email' => 's/n',
            'direccion'=>'s/n',
            'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ]);
    }
}
