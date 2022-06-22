<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RecetteController;
use App\Http\Controllers\CategorieController;

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

Route::get('/', [AccueilController::class, 'index'])->name('pageAccueil');
Auth::routes();
Route::get('/accueil', [HomeController::class, 'index'])->name('accueil');
Route::get('/contact', [ContactController::class, 'index'])->name('contacter');

Route::controller(RecetteController::class)->group(function () {
    Route::get('/recettes', 'index')->name('liste');
    Route::get('/recette/creer', 'create')
        ->name('creer')
        ->middleware('auth');
    Route::get('/recette/details/{id}', 'show')->name('visualiser.{id}');
    Route::get('/recette/modifier/{id}', 'edit')->name('modifier.{id}');
    Route::put('/recette/update/{id}', 'update')->name('update.{id}');
    Route::get('/recette/supprimer/{id}', 'destroy')->name('supprimer.{id}');
    Route::get('/categories/top/recettes', 'categorie')->name(
        'recette.categories'
    );
    Route::get('/top/recettes', 'topRecettes')->name('filtrer');
    Route::post('/recette/enregistrer', 'store')
        ->name('enregistrer')
        ->middleware('auth');
    Route::post('/like-recette/{id}', 'likeRecette')->name('like.recette');
    Route::post('/unlike-recette/{id}', 'unlikeRecette')->name(
        'unlike.recette'
    );
});

Route::group(['middleware' => ['admin']], function () {
    Route::get('tableauDeBord/admin', [
        AdminController::class,
        'adminView',
    ])->name('admin.view');
});

Route::controller(MessageController::class)->group(function () {
    Route::post('/message/send', 'create')->name('message.create');
    Route::get('/remerciement', 'merci')->name('merci');
});

Route::controller(CategorieController::class)->group(function () {
    Route::get('/categorie/create', 'create')->name('categorie.create');
    Route::post('/categorie/store', 'store')->name('categorie.store');
    Route::get('/categorie/index', 'index')->name('categorie.index');
    Route::get('/categorie/delete/{id}', 'destroy')->name('categorie.destroy');
    Route::get('/categorie/edit', 'edit')->name('categorie.edit');
});