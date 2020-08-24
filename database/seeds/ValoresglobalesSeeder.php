<?php

use Illuminate\Database\Seeder;

class ValoresglobalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('valoresglobales')->insert([
            'nombre' => 'prefijofactura',
            'valor' => '001-001-',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ]);
        DB::table('valoresglobales')->insert([
            'nombre' => 'facturaactual',
            'valor' => '000000000',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ]);
        DB::table('valoresglobales')->insert([
            'nombre' => 'iva',
            'valor' => '0.12',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ]);
        DB::table('valoresglobales')->insert([
            'nombre' => 'ice',
            'valor' => '0',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ]);
    }
}
