<?php

namespace App\Http\Controllers;

use App\Models\Camiseta;
use Illuminate\Http\Request;

class CamisetaController extends Controller
{
    public function mostrarCamisetasInazuma()
    {
        $camisetas = Camiseta::where('idColeccion', 1)->get();

        return view('inazuma', ['camisetas' => $camisetas]);
    }

    public function mostrarCamisetasBluelock()
    {
        $camisetas = Camiseta::where('idColeccion', 2)->get();

        return view('bluelock', ['camisetas' => $camisetas]);
    }

    public function mostrarCamisetasOliverbenji()
    {
        $camisetas = Camiseta::where('idColeccion', 3)->get();

        return view('oliverbenji', ['camisetas' => $camisetas]);
    }

}
