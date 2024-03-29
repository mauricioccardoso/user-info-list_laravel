<?php

use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'index'])->name('user-list');
Route::post('/user', [UserController::class, 'store'])->name('user-create');
Route::put('/user', [UserController::class, 'update'])->name('user-update');
Route::delete('/user', [UserController::class, 'destroy'])->name('user-destroy');
