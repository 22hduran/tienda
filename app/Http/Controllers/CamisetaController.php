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

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crearCamiseta',[]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $camiseta = new Camiseta();
        $camiseta->camiseta = $request->camiseta;
        $camiseta->precio = $request->precio;
        $path = $request->file('imagen')->store('camisetas', 'public');
        $camiseta->urlFoto = 'storage/'.$path;
        $camiseta->idColeccion = $request->idColeccion;
        $camiseta->save();

        return view('index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
