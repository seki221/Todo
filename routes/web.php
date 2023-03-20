<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


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

Route::get('/', [TodoController::class, 'index'])->name('home');
// Route::get('/layouts.index', [TodoController::class, 'create'])->name('layouts.create');
Route::post('/add', [TodoController::class, 'store']);
// Route::get('/add', [TodoController::class, 'add']);
Route::post('edit/{id}', [TodoController::class, 'edit']);
Route::post('update/{id}', [TodoController::class, 'layouts.update'])->name('update');
// Route::get('/delete/{id}', [TodoController::class, 'delete']);
// Route::post('remove', [TodoController::class, 'remove']);


// 削除
Route::post('/destroy{id}', [TodoController::class, 'destroy'])->name('destroy');