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
Route::get('/layouts.index', [TodoController::class, 'create'])->name('layouts.create');
Route::post('/layouts.index', [TodoController::class, 'store'])->name('layouts.store');
Route::get('/add', [TodoController::class, 'add']);
Route::get('edit/{id}', [TodoController::class, 'edit']);
Route::post('update/{id}', [TodoController::class, 'layouts.update'])->name('update');
Route::get('/delete', [TodoController::class, 'delete']);
Route::post('remove', [TodoController::class, 'remove']);

// Route::get('index','TodoController@index');
// Route::get('create', 'TodoController@create');
// Route::post('/index', 'TodoController@store');
// Route::get('show/{id}', 'TodoController@show');
// Route::get('edit/{id}','TodoController@edit');
// Route::put('update/{id}', 'TodoController@edit');
// Route::delete('destory/{id}','TodoController@destroy');


// Route::get('index','TodoController@index');
// Route::get('create', 'TodoController@create');
// Route::post('store', 'TodoController@store');
// Route::get('edit/{id}','TodoController@edit');
// Route::post('update/{id}','TodoController@edit');
// Route::delete('destory/{id}','TodoController@destroy');