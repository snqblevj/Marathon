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

Route::get('/',[\App\Http\Controllers\SerieController::class,'accueilSerie'])->name('series.index');

Route::get('/series',[\App\Http\Controllers\SerieController::class,'showSerie'])->name('series.show');

Route::get('/series/{id}',[\App\Http\Controllers\SerieController::class,'showIdSerie'])->name('serie.show')->whereNumber(('id'));

Route::get('/series/seen/{id}/{series}',[\App\Http\Controllers\SerieController::class,'addSeen'])->name('episode.seen')->middleware('auth');

Route::get('series/{genre}',[\App\Http\Controllers\SerieController::class,'showGenreSerie'])->name('genre.show');




//Route::post("/login", );
