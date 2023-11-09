<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
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

Route::get('/', [ContactController::class, 'index'])->name('contact.index');

Route::get('/login', [AuthController::class, 'index'])->name('auth.login');
Route::post('/login/do', [AuthController::class, 'attempt'])->name('auth.login.do');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::group(['middleware' => 'auth:sanctum'], function(){

    Route::get('/create', [ContactController::class, 'create'])->name('contact.create');
    Route::post('/store', [ContactController::class, 'store'])->name('contact.store');

    Route::get('/edit/{id}', [ContactController::class, 'edit'])->name('contact.edit');
    Route::put('/update/{id}', [ContactController::class, 'update'])->name('contact.update');

    Route::delete('/delete/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
});
