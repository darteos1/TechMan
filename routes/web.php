<?php



use App\Http\Controllers\pacientesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\atendentesController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\examesController;
use App\Http\Controllers\marcacao_consultaController;
use App\Http\Controllers\medicosController;
use App\Models\marcacao_consultaModel;

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

Route::get('/auth/register',[RegisterController::class,'create'])->name('cadastro-user');
Route::post('/auth/register', [RegisterController::class,'store'])->name('user-store');
