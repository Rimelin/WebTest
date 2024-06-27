<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Producto::create([
            'nombre' => 'Monitor Redmi LED',
            'categoria' => 'Monitores',
            'fecha_de_creacion' => '2022-02-14',
            'costo' => 1500.50,
            'numero_disponible' => 10,
            'foto' => 'monitorxiaomic.jpg', // Ruta de la imagen
        ]);

        Producto::create([
            'nombre' => 'Monitor LG UltraGear 27"',
            'categoria' => 'Monitores',
            'fecha_de_creacion' => '2023-02-14',
            'costo' => 4999,
            'numero_disponible' => 5,
            'foto' => 'monitorlgug.jpg',
        ]);

        Producto::create([
            'nombre' => 'Monitor Stylos 19"',
            'categoria' => 'Monitores',
            'fecha_de_creacion' => '2021-02-14',
            'costo' => 900,
            'numero_disponible' => 3,
            'foto' => 'monitorstylos.jpg',
        ]);

        Producto::create([
            'nombre' => 'AMD RX 6600',
            'categoria' => 'GPU',
            'fecha_de_creacion' => '2021-01-20',
            'costo' => 4000,
            'numero_disponible' => 3,
            'foto' => 'rx6600.jpg',
        ]);

        Producto::create([
            'nombre' => 'AMD RX 7900 GRE',
            'categoria' => 'GPU',
            'fecha_de_creacion' => '2024-01-15',
            'costo' => 11000,
            'numero_disponible' => 3,
            'foto' => 'rx7900gre.jpg',
        ]);

        Producto::create([
            'nombre' => 'NVIDIA RTX 3060',
            'categoria' => 'GPU',
            'fecha_de_creacion' => '2021-01-01',
            'costo' => 5500,
            'numero_disponible' => 3,
            'foto' => 'rtx3060.jpg',
        ]);

        Producto::create([
            'nombre' => 'NVIDIA RTX 4080',
            'categoria' => 'GPU',
            'fecha_de_creacion' => '2024-02-14',
            'costo' => 25000,
            'numero_disponible' => 3,
            'foto' => 'rtx4080.jpg',
        ]);

        Producto::create([
            'nombre' => 'Teclado redlemon',
            'categoria' => 'Teclados',
            'fecha_de_creacion' => '2019-02-14',
            'costo' => 400,
            'numero_disponible' => 12,
            'foto' => 'tecredlemon.jpg',
        ]);

        Producto::create([
            'nombre' => 'Teclado acteck',
            'categoria' => 'Teclados',
            'fecha_de_creacion' => '2022-03-30',
            'costo' => 599,
            'numero_disponible' => 5,
            'foto' => 'tecacteck.jpg',
        ]);

        Producto::create([
            'nombre' => 'Audifonos corsair HS70 pro',
            'categoria' => 'Audifonos',
            'fecha_de_creacion' => '2022-09-25',
            'costo' => 1699.98,
            'numero_disponible' => 1,
            'foto' => 'audifonoscorsair.jpg',
        ]);

    }
}
