<?php

use App\Http\Controllers\ComentariosController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
