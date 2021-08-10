<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatarsisController;
use App\Http\Controllers\CursoController;
use App\Http\Livewire\ShowModulo;
use App\Http\Controllers\UserController;
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


Route::get('/', [KatarsisController::class, 'index'])->name('home');
Route::get('/curso', [CursoController::class, 'index'])->name('cursos');
Route::get('/curso/mostrar/{id}', [CursoController::class, 'mostrar']);
Route::post('curso/{curso}/enrroled', [CursoController::class, 'enrroled'])->middleware('auth')->name('enrroled');
Route::get('/curso/{curso}/continuar', [CursoController::class, 'continuar'])->middleware('auth')->name('continuar');
//Route::get('/curso/{curso}/continuar', ShowModulo::class)->name('continuar');
//Route::get('/curso/modulo/{id}', [CursoController::class, 'modulo'])->middleware('auth')->name('modulo');
//Route::get('/curso/modulo/', ShowModulo::class)->middleware('auth')->name('modulo');
    
Route::get('/dashboard',[UserController::class, 'dashboard'])->middleware('auth:sanctum', 'verified')->name('dashboard');
    


