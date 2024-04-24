<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;




Route::view('/', 'welcome')->name('welcome');
Route::view('login', 'login')->name('login');

Route::view('register', 'register')->name('register');

Route::view('/Departamento', 'asd')->name('Departamento');
Route::view('/Academicos', 'equipo/academicos')->name('academicos');
Route::view('/Administrativos', 'equipo/funcionarios')->name('funcionarios');
Route::view('/Ingenieria-Civil-en-Computacion-e-Informatica','Carrera/pregrado/Ingenieria-Civil')->name('Ingenieria-Civil');
Route::view('/Diplomado-en-tecnología-para-inteligencia-de-negocios', 'Carrera/postitulo/diplomado-inteligencia-negocios')->name('Inteligencia-Negocio');
Route::view('/Magíster-en-Informática-y-Ciencias-de-la-Computación', 'Carrera/postgrado/informatica')->name('Magister-Informatica');
Route::view('/Noticias', 'noticias')->name('noticias');
Route::view('/Publicaciones', 'investigaciones/publicaciones')->name('publicacion');
Route::view('/Proyectos', 'investigaciones/proyectos')->name('proyecto');
Route::view('/Galeria', 'galerias')->name('galeria');

Route::view('/secret', 'hola')->name('hola');

Route::post('loginVerify',[LoginController::class,'loginVerify'])->name('loginVerify');
Route::post('register',[LoginController::class,'register'])->name('register');