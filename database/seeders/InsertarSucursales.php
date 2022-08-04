<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarSucursales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursales')->insert(array(
            [
                'nombre' => 'Sucursal La Florida'
            ],
            [
                'nombre' => 'Sucursal San Bernardo'
            ],
            [
                'nombre' => 'Sucursal Baquedano'
            ]
        ));
    }
}
