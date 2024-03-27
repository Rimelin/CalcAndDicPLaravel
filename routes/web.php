<?php

use Illuminate\Support\Facades\Route;
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
