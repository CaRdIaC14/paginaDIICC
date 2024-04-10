<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Departamento', function () {
    return view('departamento'); // Reemplaza 'departamento' con el nombre de tu vista de departamento
});

