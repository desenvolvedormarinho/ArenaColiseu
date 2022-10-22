<?php

use App\Http\Controllers\ClienteController;
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

Route::get('/', [ClienteController::class,                  'index'])  ->name('Cliente');
Route::get('/Cliente/{id}', [ClienteController::class,        'show'])   ->name("Cliente_show");
Route::get('/delete/{id}', [ClienteController::class,       'destroy'])->name('Cliente_delete');
Route::get('/add', [ClienteController::class,               'create']) ->name('Cliente_add');
Route::get('/edit/{id}',[ClienteController::class,          'edit'])   ->name('Cliente_edit');

Route::post('/Cliente_update/{id}', [ClienteController::class,'update']) ->name('Cliente_update');
Route::post('/store', [ClienteController::class,            'store'])  ->name('Cliente_store');
