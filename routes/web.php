<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\FounisseurController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\FacturecController;
use App\Http\Controllers\FacturefController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommandeController;
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

// Route::get('c/p/{id}', function ($id=0) {
  //  return view('home');
 //});
Route::get('/template', function () {
    return view('templates');
});
Route::get('/modele', function () {
    return view('blank');
});
Route::get('/pluto', function () {
    return view('pluto');
});
Route::get('/temp', function () {
    return view('temp');
});
Route::resource('categories', CategorieController::class)->middleware('auth');
Route::resource('fournisseurs',FounisseurController::class);
Route::resource('produits',ProduitController::class)->middleware('auth');

Route::resource('factureclients',FacturecController::class)->middleware('auth');
Route::resource('facturefournisseurs',FacturefController::class)->middleware('auth');
Route::resource('clients',ClientController::class)->middleware('auth');
Route::resource('commandes',CommandeController::class)->middleware('auth');
//Route::get('/facturefournisseurs/test',[facturefController::class, 'test'] );
Route::get('f/test', function ($id=1) {
    
     return view('facturefournisseurs/test');
 });
Auth::routes();
Route::middleware(['auth','role:admin']);
Route::get('c/p/{id}', [CommandeController::class, 'cpe'])->name('commandes.produits.edit');
Route::post('c/p/{id}', [CommandeController::class, 'cps'])->name('commandes.produits.store');
Route::get('f/c/{id}', [FacturefController::class, 'test'])->name('commandes.produits.print');

//    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\ProduitController::class, 'index'])->name('home')->middleware('auth');