<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(array(
            [
                'codigo' => '0001',
                'name' => 'Mouse Genius',
                'categoria' => 'Electrónica',
                'sucursale_id' => '1',
                'descripcion' => 'El ratón inalámbrico de 2,4 GHz NX-7000 con un motor de 1.200 dpi.',
                'cantidad' => '35',
                'precio' => '7590',

            ],
            [
                'codigo' => '0002',
                'name' => 'Teclado Logitech',
                'categoria' => 'Electrónica',
                'sucursale_id' => '2',
                'descripcion' => 'Te presentamos el K780, un teclado compacto diseñado para nuestra época multitarea.',
                'cantidad' => '15',
                'precio' => '83590',
            ],
[
                'codigo' => '0003',
                'name' => 'Memoria RAM SoDimm ddr4',
                'categoria' => 'Electrónica',
                'sucursale_id' => '3',
                'descripcion' => 'Mayor velocidad. Más vida útil de la batería. Más capacidad de memoria. Alimente su portátil de nueva generación.',
                'cantidad' => '8',
                'precio' => '79990',
            ],
[
                'codigo' => '0004',
                'name' => 'Conector RJ45 CAT6',
                'categoria' => 'Electrónica',
                'sucursale_id' => '1',
                'descripcion' => 'Conector RJ45 CAT6 10 unidades.',
                'cantidad' => '34',
                'precio' => '1990',
            ],
[
                'codigo' => '0005',
                'name' => 'Cable patch cord UTP CAT5E',
                'categoria' => 'Electrónica',
                'sucursale_id' => '2',
                'descripcion' => 'Cable patch cord CAT5E + Conectores RJ45 0.5m - 100% Cobre.',
                'cantidad' => '51',
                'precio' => '1390',
            ],
[
                'codigo' => '0006',
                'name' => 'Adaptador Micro HDMI a HDMI-M',
                'categoria' => 'Electrónica',
                'sucursale_id' => '3',
                'descripcion' => 'El adaptador digital permite convertir la señal de video HDMI a HDMI-M.',
                'cantidad' => '23',
                'precio' => '990',
            ],
[
                'codigo' => '0007',
                'name' => 'Unidad SSD 240GB Crucial',
                'categoria' => 'Electrónica',
                'sucursale_id' => '1',
                'descripcion' => 'La manera más sencilla de obtener toda la velocidad de una nueva computadora sin el precio.',
                'cantidad' => '8',
                'precio' => '26990',
            ],
[
                'codigo' => '0008',
                'name' => 'Extensor cable PCI-E 8 pin',
                'categoria' => 'Electrónica',
                'sucursale_id' => '2',
                'descripcion' => 'Extensor cable PCI-E 8 pin a PCI-E 6+2 Marca Silverstone.',
                'cantidad' => '15',
                'precio' => '1890',
            ],
[
                'codigo' => '0009',
                'name' => 'Pendrive 16GB USB 2.0',
                'categoria' => 'Electrónica',
                'sucursale_id' => '3',
                'descripcion' => 'Lleve consigo sus archivos favoritos en la ultracompacta y portátil unidad flash USB Cruzer Blade.',
                'cantidad' => '4',
                'precio' => '3290',
            ],
[
                'codigo' => '0010',
                'name' => 'Memoria 4GB SDHC / Clase 4',
                'categoria' => 'Electrónica',
                'sucursale_id' => '1',
                'descripcion' => 'Las tarjetas SDHC, ofrecen un amplio volumen de almacenamiento de datos y un optimo rendimiento de grabación.',
                'cantidad' => '18',
                'precio' => '4290',
            ],
        ));
    }
}
