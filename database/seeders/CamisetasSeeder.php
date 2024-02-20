<?php

namespace Database\Seeders;

use App\Models\Camiseta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CamisetasSeeder extends Seeder
{
    public function run()
    {
        $camisetas = [
            [
                'idColeccion' => 1,
                'camiseta' => 'Raimon',
                'precio' => 19.99,
                'urlFoto' => 'raimon.png'
            ],
            [
                'idColeccion' => 1,
                'camiseta' => 'Royal Academy',
                'precio' => 19.99,
                'urlFoto' => 'royalAcademy.png'
            ],
            [
                'idColeccion' => 1,
                'camiseta' => 'Zeus',
                'precio' => 19.99,
                'urlFoto' => 'zeus.png'
            ],
            [
                'idColeccion' => 1,
                'camiseta' => 'Inazuma Japon',
                'precio' => 19.99,
                'urlFoto' => 'inazumaJapon.png'
            ],
            [
                'idColeccion' => 2,
                'camiseta' => 'Blue Lock Azul',
                'precio' => 19.99,
                'urlFoto' => 'bluelockAzul.png'
            ],
            [
                'idColeccion' => 2,
                'camiseta' => 'Blue Lock Rojo',
                'precio' => 19.99,
                'urlFoto' => 'bluelockRojo.png'
            ],
            [
                'idColeccion' => 2,
                'camiseta' => 'Blue Lock Blanco',
                'precio' => 19.99,
                'urlFoto' => 'bluelockBlanco.png'
            ],
            [
                'idColeccion' => 3,
                'camiseta' => 'New Team',
                'precio' => 19.99,
                'urlFoto' => 'newteam.png'
            ],
            [
                'idColeccion' => 3,
                'camiseta' => 'Toho',
                'precio' => 19.99,
                'urlFoto' => 'toho.png'
            ],
        ];

        foreach ($camisetas as $camiseta) {
            Camiseta::create($camiseta);
        }
    }
}
