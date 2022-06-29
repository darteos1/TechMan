<?php

use App\Http\Controllers\controller_equipamentos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/user')->group(function(){
    Route::get('/create', [HomeController::class, 'create'])->name('create-user');
    Route::post('/', [HomeController::class, 'store'])->name('store-user');
});

Route::post('/', [controller_equipamentos::class, 'store'])->name('store-equip');