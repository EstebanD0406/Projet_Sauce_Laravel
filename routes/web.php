<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('sauces.index');
});

Route::get('/sauces', [App\Http\Controllers\SauceController::class, 'index'])->name('sauces.index');
Route::get('/sauces/create', [App\Http\Controllers\SauceController::class, 'create'])->name('sauces.create');
Route::post('/sauces', [App\Http\Controllers\SauceController::class, 'store'])->name('sauces.store');
Route::get('/sauces/{id}', [App\Http\Controllers\SauceController::class, 'show'])->name('sauces.show');
Route::get('/sauces/{id}/edit', [App\Http\Controllers\SauceController::class, 'edit'])->name('sauces.edit');
Route::put('/sauces/{id}', [App\Http\Controllers\SauceController::class, 'update'])->name('sauces.update');
Route::delete('/sauces/{id}', [App\Http\Controllers\SauceController::class, 'destroy'])->name('sauces.destroy');
