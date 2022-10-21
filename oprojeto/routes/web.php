<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

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

//Route::get('/', function () {
   // return view('welcome');
//});
Route::get('/', [AlunoController::class,                  'index'])  ->name('aluno');
Route::get('/aluno/{id}', [AlunoController::class,        'show'])   ->name("aluno_show");
Route::get('/delete/{id}', [AlunoController::class,       'destroy'])->name('aluno_delete');
Route::get('/add', [AlunoController::class,               'create']) ->name('aluno_add');
Route::get('/edit/{id}',[AlunoController::class,          'edit'])   ->name('aluno_edit');

Route::post('/aluno_update/{id}', [AlunoController::class,'update']) ->name('aluno_update');
Route::post('/store', [AlunoController::class,            'store'])  ->name('aluno_store');
