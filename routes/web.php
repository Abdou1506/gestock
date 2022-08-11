<?php

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

Route::get('/', function () {
    return view('login');
});
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
Route::resource('categories', CategorieController::class);
Route::resource('fournisseurs',FounisseurController::class);
Route::resource('produits',ProduitController::class);

Route::resource('factureclients',FacturecController::class);
Route::resource('facturefournisseurs',FacturefController::class);
Route::resource('clients',ClientController::class);
Route::resource('commandes',CommandeController::class);
// Route::get('/facturefournisseurs/test',[facturefController::class, 'test'] );
Route::get('facturefournisseurs/test', function () {
    return view('facturefournisseurs/test');
});
Auth::routes();


Route::get('/home', [App\Http\Controllers\ProduitController::class, 'index'])->name('home');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');