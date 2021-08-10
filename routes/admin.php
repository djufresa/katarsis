<?php
use App\Http\Livewire\Administrador;
use Illuminate\Support\Facades\Route;
//Route::get('/', [AdminController::class, 'index'])->name('admin');
Route::get('/', Administrador::class)->middleware('role:Administrador')->name('admin');
