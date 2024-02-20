<?php

namespace Database\Seeders;

use App\Models\Coleccion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Inazuma Eleven',
            'Blue Lock',
            'Oliver y Benji'
        ];

        foreach ($categories as $category) {
            Coleccion::create([
                'coleccion' => $category,
            ]);
        }
    }
}
