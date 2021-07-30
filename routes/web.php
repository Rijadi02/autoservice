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



Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//user roots
Route::get('users', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('users.index');
Route::post('users/store', [App\Http\Controllers\Auth\RegisterController::class, 'store'])->name('users.store');
Route::get('users/{user}/edit',  [App\Http\Controllers\Auth\RegisterController::class, 'edit'])->name('users.edit');
Route::patch('users/{user}/update', [App\Http\Controllers\Auth\RegisterController::class, 'update'])->name('users.update');
Route::delete('users/{user}/delete', [App\Http\Controllers\Auth\RegisterController::class, 'destroy'])->name('users.destroy');

//client roots
Route::get('clients', [App\Http\Controllers\ClientController::class, 'index'])->name('clients.index');
Route::post('clients/store', [App\Http\Controllers\ClientController::class, 'store'])->name('clients.store');
Route::get('clients/{client}/edit',  [App\Http\Controllers\ClientController::class, 'edit'])->name('clients.edit');
Route::patch('clients/{client}/update', [App\Http\Controllers\ClientController::class, 'update'])->name('clients.update');
Route::delete('clients/{client}/delete', [App\Http\Controllers\ClientController::class, 'destroy'])->name('clients.destroy');
Route::get('clients/{client}/cars', [App\Http\Controllers\ClientController::class, 'cars'])->name('clients.cars');

//car roots
Route::get('client/{client}/car', [App\Http\Controllers\CarController::class, 'index'])->name('cars.index');
Route::post('cars/{client}/store', [App\Http\Controllers\CarController::class, 'store'])->name('cars.store');
Route::get('cars/{client}/edit',  [App\Http\Controllers\CarController::class, 'edit'])->name('cars.edit');
Route::patch('cars/{car}/update', [App\Http\Controllers\CarController::class, 'update'])->name('cars.update');
Route::delete('cars/{car}/delete', [App\Http\Controllers\CarController::class, 'destroy'])->name('cars.destroy');

//daamge roots
Route::get('car/{car}/damage_type', [App\Http\Controllers\DamageController::class, 'damage_type'])->name('cars.damage_type');
Route::get('car/{car}/hail_damage', [App\Http\Controllers\DamageController::class, 'damage_hail'])->name('cars.damage_hail');
Route::post('damage_hail/{car}/store', [App\Http\Controllers\DamageController::class, 'damage_hail_store'])->name('damage_hail.store');
Route::get('car/{car}/images', [App\Http\Controllers\DamageController::class, 'images'])->name('cars.images');
Route::post('images/{car}/store', [App\Http\Controllers\DamageController::class, 'images_store'])->name('images.store');
Route::get('car/{car}/flat_rates', [App\Http\Controllers\DamageController::class, 'flat_rates'])->name('cars.flat_rates');
Route::post('flat_rates/{car}/store', [App\Http\Controllers\DamageController::class, 'flat_rates_store'])->name('flat_rates.store');
Route::delete('damages/{damage}/delete', [App\Http\Controllers\DamageController::class, 'destroy'])->name('damages.destroy');


//invoices

Route::get('car/{car}/user_invoice',[App\Http\Controllers\CarController::class, 'user_invoice'])->name('user.invoice');

Route::get('/signaturepad/{car}', [App\Http\Controllers\CarController::class, 'signature'])->name('signaturepad');
Route::post('{car}/signaturepad/', [App\Http\Controllers\CarController::class, 'signature_upload'])->name('signaturepad.upload');

Route::get('prototypes', [App\Http\Controllers\HomeController::class, 'prototypes'])->name('prototypes.index');
Route::post('prototypes/store', [App\Http\Controllers\HomeController::class, 'prototypes_store'])->name('prototypes.store');
Route::delete('prototypes/{type}/delete', [App\Http\Controllers\HomeController::class, 'prototypes_destroy'])->name('prototypes.destroy');

Route::get('brands', [App\Http\Controllers\HomeController::class, 'brands'])->name('brands.index');
Route::post('brands/store', [App\Http\Controllers\HomeController::class, 'brands_store'])->name('brands.store');
Route::delete('brands/{type}/delete', [App\Http\Controllers\HomeController::class, 'brands_destroy'])->name('brands.destroy');
