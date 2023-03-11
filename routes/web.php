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
// Route::group(['prefix' => 'todo'], function () {
//     Route::get('/', [TodoController::class, 'index']);
//     Route::get('add', [TodoController::class, 'add']);
//     Route::get('edit', [TodoController::class, 'edit']);
//     Route::get('delete', [TodoController::class, 'delete']);
// });


Route::get('/todos', [TodoController::class, 'index']);
Route::post('/todo', [TodoController::class, 'store']);
// Route::get('/add', [TodoController::class, 'get']);

Route::post('/add/{id}', [TodoController::class, 'create']);
Route::get('/edit', [TodoController::class, 'edit']);
Route::post('/update', [TodoController::class, 'update']);
Route::delete('/todo/{todo}', [TodoController::class, 'delete']);
Route::post('/remove', [TodoController::class, 'remove']);


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
