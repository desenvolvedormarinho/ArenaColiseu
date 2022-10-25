<?php

use App\Http\Controllers\CampoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ComunController;
use App\Http\Controllers\ReservaController;

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


//comun
Route::get('/',[ComunController::class, 'index'])->name('MainPage');

//reserva
Route::get('/Reserva', [ReservaController::class,                  'index'])  ->name('Reserva_index');
Route::get('/Reserva/Reserva/{id}', [ReservaController::class,        'show'])   ->name("Reserva_show");
Route::get('/Reserva/delete/{id}', [ReservaController::class,       'destroy'])->name('Reserva_delete');
Route::get('/Reserva/add', [ReservaController::class,               'create']) ->name('Reserva_add');
Route::get('/Reserva/edit/{id}',[ReservaController::class,          'edit'])   ->name('Reserva_edit');

Route::post('/Reserva/update/{id}', [ReservaController::class,'update']) ->name('Cliente_update');
Route::post('/Reserva/store', [ReservaController::class,            'store'])  ->name('Cliente_store');


//campo
Route::get('/Campo', [CampoController::class,                  'index'])->name('Campo_index');
Route::get('/Campo/Campo/{id}', [CampoController::class,        'show'])->name("Campo_show");
Route::get('/Campo/delete/{id}', [CampoController::class,       'destroy'])->name('Campo_delete');
route::get('/Campo/add',[CampoController::class,                 'create'])->name('Campo_add');
Route::get('/Campo/edit/{id}',[CampoController::class,          'edit'])->name('Campo_edit');

Route::post('/Campo/update/{id}', [CampoController::class,'update']) ->name('Campo_update');
Route::post('/Campo/store', [CampoController::class,            'store'])  ->name('Campo_store');


//Cliente
Route::get('/Clientes', [ClienteController::class,                  'index'])  ->name('Cliente_index');
Route::get('/Clientes/Cliente/{id}', [ClienteController::class,        'show'])   ->name("Cliente_show");
Route::get('/Clientes/delete/{id}', [ClienteController::class,       'destroy'])->name('Cliente_delete');
Route::get('/Clientes/add', [ClienteController::class,               'create']) ->name('Cliente_add');
Route::get('/Clientes/edit/{id}',[ClienteController::class,          'edit'])   ->name('Cliente_edit');

Route::post('/Clientes/Cliente/{id}', [ClienteController::class,'update']) ->name('Cliente_update');
Route::post('/Clientes/store', [ClienteController::class,            'store'])  ->name('Cliente_store');
