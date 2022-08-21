<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BejegyzesController;
use App\Http\Controllers\TevekenysegController;
use App\Http\Controllers\UserController; //ez meg nincs hasznalatban

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

require __DIR__.'/auth.php';

/*****************************BEJEGYZESEK*******************************/
Route::get('/bejegyzes', [BejegyzesController::class, 'index']); //osszesbejegyzést kilistazza a tevekenyseg-bol
Route::get('/bejegyzesek/{osztalyid}', [BejegyzesController::class, 'osztaly']);//bejegyzesek osztalyid szerint
Route::post('/bejegyzes', [BejegyzesController::class, 'store']);  //


/*****************************TEVEKENYSEGEK****************************/
Route::get('/tevekenyseg', [TevekenysegController::class, 'index']);//osszes tevekenyseg kilist.

/*****************INDEX.PHP ROUTE-OLASA!!!!!!!!!!***************************/
Route::get('/mainpage', function () {
    return view('mainpage');
});



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

