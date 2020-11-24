<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => 'web'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Auth::routes(); 
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class, 'index']); //rota ver usuarios
Route::get('/usuarios/new', [App\Http\Controllers\UsuariosController::class, 'new']); //rota criar novo usuário
Route::post('/usuarios/add', [App\Http\Controllers\UsuariosController::class, 'add']); //rota adicionar new
Route::get('usuarios/{id}/edit', [App\Http\Controllers\UsuariosController::class, 'edit']);
Route::post('usuarios/update/{id}', [App\Http\Controllers\UsuariosController::class, 'update']);


