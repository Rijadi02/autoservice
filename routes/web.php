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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//user roots
Route::get('/users', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('users.index');
Route::post('/users/store', [App\Http\Controllers\Auth\RegisterController::class, 'store'])->name('users.store');
Route::get('users/{user}/edit',  [App\Http\Controllers\Auth\RegisterController::class, 'edit'])->name('users.edit');
Route::patch('users/{user}/update', [App\Http\Controllers\Auth\RegisterController::class, 'update'])->name('users.update');
Route::delete('users/{user}/delete', [App\Http\Controllers\Auth\RegisterController::class, 'destroy'])->name('users.destroy');
// Route::get('/login', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('user.login');

Route::get('/clients', [App\Http\Controllers\ClientController::class, 'index'])->name('clients.index');
Route::post('/clients/store', [App\Http\Controllers\ClientController::class, 'store'])->name('clients.store');
Route::get('clients/{client}/edit',  [App\Http\Controllers\ClientController::class, 'edit'])->name('clients.edit');
Route::patch('clients/{client}/update', [App\Http\Controllers\ClientController::class, 'update'])->name('clients.update');
Route::delete('clients/{client}/delete', [App\Http\Controllers\ClientController::class, 'destroy'])->name('clients.destroy');

