<?php

use Illuminate\Database\Seeder;

class UnidadmedidasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unidadmedidas')->insert([
            'nombre' => 'unidades',
            'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ]);
    }
}
