<?php

use App\Http\Controllers\GestionClienteController;
use App\Http\Controllers\GestionController;
use App\Http\Controllers\TicketController;
use App\Models\GestionCliente;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('gestiones', GestionController::class)->middleware('auth');
Route::resource('tickets', TicketController::class)->middleware('auth');
Route::resource('clientes', GestionClienteController::class);
