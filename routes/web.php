<?php

use App\Http\Controllers\clienteController;
use App\Http\Controllers\ClienteTpaController;
use App\Http\Controllers\EstabelecimentoController;
use App\Http\Controllers\TpaController;
use App\Models\ClienteTpa;
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
Route::get('cliente/listar',[clienteController::class,'read'])->name('cliente.read');
Route::post('cliente',[clienteController::class,'create'])->name('cliente.create');
Route::get('cliente/update/{id}',[clienteController::class,'updateShow'])->name('cliente.update');
Route::post('cliente/update/{id}',[clienteController::class,'update'])->name('cliente.updateStore');
Route::get('cliente/delete/{id}',[clienteController::class,'delete'])->name('cliente.delete');

Route::get("tpa",[TpaController::class,'show'])->name('tpa.view');
Route::post("tpa",[TpaController::class,'store'])->name('tpa.create');
Route::get("tpa/listar",[TpaController::class,'read'])->name('tpa.read');
Route::get("tpa/delete/{id}",[TpaController::class,'delete'])->name('tpa.delete');
Route::get("tpa/update/{id}",[TpaController::class,'updateView'])->name('tpa.updateView');
Route::post("tpa/update/{id}",[TpaController::class,'update'])->name('tpa.update');







Route::get("gerir",[ClienteTpaController::class,'index']);





