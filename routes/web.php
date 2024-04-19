<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Departamento', function () {
    return view('departamento'); // Reemplaza 'departamento' con el nombre de tu vista de departamento
});

Route::get('/login', function () {
    return view('login'); 
});

Route::get('/funcionarios', function () {
    return view('funcionarios'); 
});

Route::get('/Ingenieria-Civil', function () {
    return view('Ingenieria-Civil'); 
});

Route::get('/Ingenieria-Ejecucion', function () {
    return view('Ingenieria-Ejecucion'); 
});

Route::get('/noticia', function () {
    return view('noticia'); 
});