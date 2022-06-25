<?php

use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\EquipamentosController;
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

Route::prefix('comentarios')->group(function(){
    Route::get('/', [ComentariosController::class, 'index'])->name('comentarios-index');
    Route::get('/create', [ComentariosController::class, 'create'])->name('comentarios-create');
    Route::post('/', [ComentariosController::class, 'store'])->name('comentarios-store');
    Route::get('/{id}/edit', [ComentariosController::class, 'edit'])->where('id','[0-9]+')->name('comentarios-edit');
    Route::put('/{id}', [ComentariosController::class, 'update'])->where('id','[0-9]+')->name('comentarios-update');
    Route::delete('/{id}', [ComentariosController::class, 'destroy'])->where('id','[0-9]+')->name('comentarios-destroy');
    Route::get('/{id}', [ComentariosController::class, 'show'])->where('id','[0-9]+')->name('comentarios-show');
});

Route::prefix('equipamentos')->group(function(){
    Route::get('/', [EquipamentosController::class, 'index'])->name('equipamentos-index');
    Route::get('/create', [EquipamentosController::class, 'create'])->name('equipamentos-create');
    Route::post('/', [EquipamentosController::class, 'store'])->name('equipamentos-store');
    Route::get('/{id}/edit', [EquipamentosController::class, 'edit'])->where('id','[0-9]+')->name('equipamentos-edit');
    Route::put('/{id}', [EquipamentosController::class, 'update'])->where('id','[0-9]+')->name('equipamentos-update');
    Route::delete('/{id}', [EquipamentosController::class, 'destroy'])->where('id','[0-9]+')->name('equipamentos-destroy');
    Route::get('/{id}', [EquipamentosController::class, 'show'])->where('id','[0-9]+')->name('equipamentos-show');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
