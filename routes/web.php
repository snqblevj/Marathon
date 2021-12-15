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

Route::get('/',[\App\Http\Controllers\SerieController::class,'accueilSerie'])->name('serie.show');

Route::get('/series',[\App\Http\Controllers\SerieController::class,'showSerie'])->name('series.show');

Route::get('/series/{id}',[\App\Http\Controllers\SerieController::class,'showIdSerie'])->name('serie.show');




//Route::post("/login", );
