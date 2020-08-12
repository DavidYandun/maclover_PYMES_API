<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SucursalesSeeder::class);
        $this->call(UbicacionesSeeder::class);
        $this->call(ClientesSeeder::class);
        $this->call(MarcasSeeder::class);
        $this->call(CategoriasSeeder::class);
        $this->call(UnidadmedidasSeeder::class);
        $this->call(ProveedoresSeeder::class);
        $this->call(ValoresglobalesSeeder::class);
    }
}

