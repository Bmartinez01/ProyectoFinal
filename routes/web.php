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
    return view('auth.login');
});

Route::resource('users',  App\Http\Controllers\UserController::class)->middleware('auth');
/* Route::get('/users/{users}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit'); */

Route::resource('clientes',  App\Http\Controllers\ClienteController::class)->middleware('auth');
Route::resource('categorias',  App\Http\Controllers\CategoriaController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
