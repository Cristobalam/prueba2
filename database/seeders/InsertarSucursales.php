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
                'name' => 'Sucursal La Florida'
            ],
            [
                'name' => 'Sucursal San Bernardo'
            ],
            [
                'name' => 'Sucursal Baquedano'
            ]
        ));
    }
}
