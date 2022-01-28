<?php

use App\Http\Controllers\clienteController;
use App\Http\Controllers\EstabelecimentoController;
use App\Models\Colaborador;
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

// Route::get('/', [EstabelecimentoController::class,"index"])->name("home");
// Route::post('/create', [EstabelecimentoController::class,"create"])->name("criar");
// Route::get('delete/{id}', [EstabelecimentoController::class,"delete"])->name("delete");

Route::get('cliente',[clienteController::class,'view'])->name('cliente.view');
Route::post('cliente',[clienteController::class,'create'])->name('cliente.create');
Route::put('cliente',[clienteController::class,'update'])->name('cliente.update');
Route::delete('cliente',[clienteController::class,'delete'])->name('cliente.update');


// Route::get('tpa',[clienteController::class,'show'])->name('tpa.view');
// Route::post('tpa',[clienteController::class,'create'])->name('tpa.create');
// Route::get('tpa',[clienteController::class,'read'])->name('tpa.read');
// Route::put('tpa',[clienteController::class,'update'])->name('tpa.update');
// Route::delete('tpa',[clienteController::class,'delete'])->name('tpa.update');


// Route::get('colaborador',[clienteController::class,'show'])->name('colaborador.view');
// Route::post('colaborador',[clienteController::class,'create'])->name('colaborador.create');
// Route::get('colaborador',[clienteController::class,'read'])->name('colaborador.read');
// Route::put('colaborador',[clienteController::class,'update'])->name('colaborador.update');
// Route::delete('colaborador',[clienteController::class,'delete'])->name('colaborador.update');




