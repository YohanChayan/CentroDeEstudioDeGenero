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

Route::resource('blog','App\Http\Controllers\BlogController');
Route::resource('centrodocumentacion','App\Http\Controllers\CentroDocumentacionController');
Route::resource('encuestas','App\Http\Controllers\EncuestasController');
Route::resource('podcast','App\Http\Controllers\PodcastController');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');



// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Podcast
Route::get('/delete_podcast/{id}', array(
    'as' => 'delete_podcast',
    'middleware' => 'auth',
    'uses' => 'App\Http\Controllers\PodcastController@delete_podcast'
));

// Route::get('/Blog', function () {
//     return view('Blog');
// })->name('blog');

// Route::get('/Revista-La-Ventana', function () {
//     return view('Revista-La-Ventana');
// })->name('Revista-La-Ventana');

// Route::get('/Otra-Ventana-Podcast', function () {
//     return view('Otra-Ventana-Podcast');
// })->name('Otra-Ventana-Podcast');

// Route::get('/Encuestas', function () {
//     return view('Encuestas');
// })->name('Encuestas');

// Route::get('/Centro-de-Documentacion', [App\Http\Controllers\CentroDocumentacionController::class, 'index'])->name('Centro-de-Documentacion');
