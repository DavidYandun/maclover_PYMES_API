<?php

use Illuminate\Database\Seeder;

class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marcas')->insert([
            'nombre' => 'Genérico',
            'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ]);
    }
}
