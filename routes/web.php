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

/*vista principal*/ 
Route::get('/grid', [LogicController::class, 'grid'])->name('grid');

Route::get('/dimensiones', [LogicController::class, 'dimensiones'])->name('dimensiones');

Route::get('/texto', [LogicController::class, 'texto'])->name('texto');

Route::get('/display', [LogicController::class, 'display'])->name('display');

Route::get('/flex', [LogicController::class, 'flex'])->name('flex');

Route::get('/utilerias', [LogicController::class, 'utilerias'])->name('utilerias');

Route::get('/variantes', [LogicController::class, 'variantes'])->name('variantes');

Route::get('/practica', [LogicController::class, 'practica'])->name('practica');

Route::get('/card', [LogicController::class, 'card'])->name('card');

Route::get('/header', [LogicController::class, 'header'])->name('header');

Route::get('/footer', [LogicController::class, 'footer'])->name('footer');

Route::get('/platzifood', [LogicController::class, 'platzifood'])->name('platzifood');




