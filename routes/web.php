<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/inazuma', function () {
    return view('inazuma');
});

Route::get('/bluelock', function () {
    return view('bluelock');
});

Route::get('/oliverbenji', function () {
    return view('oliverbenji');
});

Route::get('/crear', function () {
    return view('crear');
});

