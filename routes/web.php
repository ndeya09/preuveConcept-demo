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
    return view('accueil');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('declarations', App\Http\Controllers\DeclarationController::class);

Route::get('/declarationApi', [App\Http\Controllers\DeclarationController::class,'apiData']);


Route::resource('paiements', App\Http\Controllers\PaiementController::class);


