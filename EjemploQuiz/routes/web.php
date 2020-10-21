<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pagina01');
});

Route::get('/pagina02/{tema}', function ($tema) { //$ para indicar variable en php
    return view('pagina02', ['tema'=>$tema]);
});

// Ejemplo dos rutas llevan a lo mismo

Route::get('/pagina01', function () {   
    return view('pagina01');
});

Route::get('pregunta/{tema}', 'PreguntasController@carga_pregunta');