<?php

use Illuminate\Database\Seeder;

class CajadiariaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('cajadiarias')->insert([
                'precioinicial' => 0,
                'fechayhora'=>date('Y-m-d H:m:s'),
                'responsable'=>'Jhon',
                'turno'=>'primero',
                'preciofinal'=>0,
                'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
            ]);
        }
    }
}
