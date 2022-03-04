<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\PostController;
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

Route::get('/',[InicioController::class, 'index'])->name('inicio');



Route::get('taraco/historia', function () {
    return view('taraco.historia');
})->name('taraco.historia');

Route::get('taraco/himno', function () {
    return view('taraco.himno');
})->name('taraco.himno');
Route::get('taraco/geografia', function () {
    return view('taraco.geografia');
})->name('taraco.geografia');

Route::get('municipalidad/consejo-municipal', function () {
    return view('municipalidad.consejo-municipal');
})->name('municipalidad.consejo-municipal');

Route::get('municipalidad/mision-vision', function () {
    return view('municipalidad.mision-vision');
})->name('municipalidad.mision-vision');

Route::get('municipalidad/organigrama', function () {
    return view('municipalidad.organigrama');
})->name('municipalidad.organigrama');

Route::get('gestion-municipal/{id}',[InicioController::class, 'gestion'])->name('gestion-municipal');

Route::get('normativa-municipal/{id}',[InicioController::class, 'normativa'])->name('normativa-municipal');
Route::get('publicaciones',[PostController::class, 'index'])->name('publicaciones');

Route::get('publicaciones/{post}',[PostController::class, 'show'])->name('publicaciones.show');

Route::get('publicaciones/categoria/{category}',[PostController::class, 'category'])->name('publicaciones.categoria');
Route::get('publicaciones/etiqueta/{tag}',[PostController::class, 'tag'])->name('publicaciones.etiqueta');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
