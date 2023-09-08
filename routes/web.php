<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CastController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PeranController;


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
});

Route::get('/hello', function () {
    echo"<h1>hello laravel</h1>";
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/form_input', [PagesController::class, 'FormInput']);

Route::post('/welcome', [PagesController::class, 'Welcome']);

Route::get('/master', function(){
    return view('.layout.master');
});

Route::get('/datatable', function () {
    return view('datatable.index');
});

// CRUD CAST
Route::get('/cast', [CastController::class,'index']);
Route::get('/cast/create', [CastController::class,'create']);
Route::post('/cast', [CastController::class,'store']);
Route::get('/cast/{cast_id}/edit', [CastController::class,'edit']);
Route::put('/cast/{cast_id}', [CastController::class,'update']);
Route::delete('/cast/{cast_id}', [CastController::class,'destroy']);

// CRUD FILM
Route::get('/film', [FilmController::class,'index']);
Route::get('/film/create', [FilmController::class,'create']);
Route::post('/film', [FilmController::class,'store']);
Route::get('/film/{film_id}/edit', [FilmController::class,'edit']);
Route::put('/film/{film_id}', [FilmController::class,'update']);
Route::delete('/film/{film_id}', [FilmController::class,'destroy']);

// CRUD PERAN
Route::get('/peran', [PeranController::class,'index']);
Route::get('/peran/create', [PeranController::class,'create']);
Route::post('/peran', [PeranController::class,'store']);
Route::get('/peran/{peran_id}/edit', [PeranController::class,'edit']);
Route::put('/peran/{peran_id}', [PeranController::class,'update']);
Route::delete('/peran/{peran_id}', [PeranController::class,'destroy']);

require __DIR__.'/auth.php';
