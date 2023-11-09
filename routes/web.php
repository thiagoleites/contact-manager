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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');

Route::get('/show/{id}', [\App\Http\Controllers\ContactController::class, 'show'])->name('contact.show');

Route::get('/create', [\App\Http\Controllers\ContactController::class, 'create'])->name('contact.create');
Route::post('/store', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

Route::get('/edit/{id}', [\App\Http\Controllers\ContactController::class, 'edit'])->name('contact.edit');
Route::put('/update/{id}', [\App\Http\Controllers\ContactController::class, 'update'])->name('contact.update');

Route::delete('/delete/{id}', [\App\Http\Controllers\ContactController::class, 'destroy'])->name('contact.destroy');
