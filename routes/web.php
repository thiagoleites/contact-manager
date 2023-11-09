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


//Route::get('/', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
//Route::get('/create', [\App\Http\Controllers\ContactController::class, 'create'])->name('contact.create');
Route::resource('contact', \App\Http\Controllers\ContactController::class)->except(['destroy']);
