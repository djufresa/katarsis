<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaypalController;
Route::post('{curso}/checkout', [PaypalController::class, 'checkout'])->middleware('auth')->name('checkout');
Route::post('{curso}/pay', [PaypalController::class, 'pay'])->name('pay');
Route::get('{curso}/checkout', [PaypalController::class, 'checkout'])->name('checkout');
Route::get('{curso}/pagar', [PaypalController::class, 'pagar'])->name('pagar');