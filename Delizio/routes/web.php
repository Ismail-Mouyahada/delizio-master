<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecetteController;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {return view('bienvenue');})->name('pageAccueil');

Auth::routes();

Route::get('/accueil', [HomeController::class, 'index'])->name('accueil');
Route::get('/recettes', [RecetteController::class, 'index'])->name('liste');

Route::get('/recette/creer', [RecetteController::class, 'create'])->name('creer');
Route::post('/recette/enregistrer', [RecetteController::class, 'store'])->name('enregistrer');

Route::get('/recette/details/{id}', [RecetteController::class, 'show'])->name('visualiser');
Route::post('/recette/details/{id}', [RecetteController::class, 'show'])->name('visualiser');

Route::get('/recette/modifier/{id}', [RecetteController::class, 'update'])->name('modifier');

Route::get('/recette/supprimer/{id}', [RecetteController::class, 'destroy'])->name('supprimer');

Route::get('/contact', [ContactController::class, 'index'])->name('contacter');

Route::get('/top/recettes', [RecetteController::class, 'top'])->name('meuilleurs');