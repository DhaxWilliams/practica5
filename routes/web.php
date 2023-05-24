<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('factorial', function () {
    return view('vistaFactorial');
})->name('factorial');

Route::post('obtenerFactorial', [CalculosController::class, 'calcularFactorial'])->name('obtenerFactorial');

//primera pregunta
Route::get('fibonacci', function () {
    return view('vistaFibonacci');
})->name('fibonacci');

Route::post('obtenerFibonacci', [CalculosController::class, 'calcularFibonacci'])->name('obtenerFibonacci');

//segunda pregunta
Route::get('Palabras', function () {
    return view('vistaPalabras');
})->name('Palabras');

Route::post('obtenerPalabras', [CalculosController::class, 'calcularPalabras'])->name('obtenerPalabras');

//tercera Pregunta
Route::get('Vocales', function () {
    return view('vistaVocales');
})->name('Vocales');

Route::post('obtenerVocales', [CalculosController::class, 'calcularVocales'])->name('obtenerVocales');

//cuarta pregunta 
Route::get('Perfectos', function () {
    return view('vistaNumPerfecto');
})->name('Perfectos');

Route::post('obtenerPerfectos', [CalculosController::class, 'calcularPerfectos'])->name('obtenerPerfectos');
