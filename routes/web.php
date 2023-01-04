<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logic\LogicController;

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

/*vista principal*/ 
Route::get('/', [LogicController::class, 'index'])->name('index');

Route::get('/dimensiones', [LogicController::class, 'dimensiones'])->name('dimensiones');

Route::get('/texto', [LogicController::class, 'texto'])->name('texto');

Route::get('/display', [LogicController::class, 'display'])->name('display');


