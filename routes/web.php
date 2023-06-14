<?php

use App\Http\Controllers\SeriesController;
use App\Http\Controllers\WelcomeController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [WelcomeController::class, 'welcomeView']);


Route::get('/series', [SeriesController::class, 'series']);
Route::get('/series/create', [SeriesController::class, 'create']);
Route::post('/series/salvar', [SeriesController::class, 'store']);
Route::get('/series/{id}', [SeriesController::class, 'destroy'])->name('series.destroy');
Route::post('/series/{id}/soft-delete', [SeriesController::class, 'destroyAll'])->name('series.destroyAll');
