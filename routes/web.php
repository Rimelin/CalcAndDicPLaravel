<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PalabraController;
use App\Http\Controllers\CalculadoraController;

Route::get('/', function () {
    return view('calculadora');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/ejem',function () {
    return view('app');
});


Route::get('/calculadora', [CalculadoraController::class, 'index']);
Route::get('/operacion',function() {
    return view('calculadora');
});
Route::post('/operacion', [CalculadoraController::class, 'operacion'])->name('operacion');

Route::get('/sinonimo', [PalabraController::class, 'index']);
Route::post('/clave', [PalabraController::class, 'buscarSinonimos'])->name('clave');
Route::get('/clave',function() {
    return view('sinonimo');
});