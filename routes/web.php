<?php

use App\Http\Controllers\CamisetaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/inazuma', [CamisetaController::class, 'mostrarCamisetasInazuma']);

Route::get('/bluelock', [CamisetaController::class, 'mostrarCamisetasBluelock']);

Route::get('/oliverbenji', [CamisetaController::class, 'mostrarCamisetasOliverbenji']);

Route::get('/crear', function () {
    return view('crear');
});

