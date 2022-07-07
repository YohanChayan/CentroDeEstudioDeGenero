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
    return view('welcome');
})->name('welcome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');



// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Blog', function () {
    return view('Blog');
})->name('blog');
Route::get('/Revista-La-Ventana', function () {
    return view('Revista-La-Ventana');
})->name('Revista-La-Ventana');
Route::get('/Otra-Ventana-Podcast', function () {
    return view('Otra-Ventana-Podcast');
})->name('Otra-Ventana-Podcast');
Route::get('/Centro-de-Documentacion', function () {
    return view('Centro-de-Documentacion');
})->name('Centro-de-Documentacion');
