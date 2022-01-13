<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('pricing', [\App\Http\Controllers\PricingController::class, 'index'])->name('pricing.index');

Route::get('pricing/pdf', [\App\Http\Controllers\PricingController::class, 'pdf'])->name('pricing.pdf');
