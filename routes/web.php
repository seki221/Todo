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
Route::group(['prefix' => 'todo'], function () {
    Route::get('/', [TodoController::class, 'index']);
    Route::get('add', [TodoController::class, 'add']);
    Route::get('edit', [TodoController::class, 'edit']);
    Route::get('delete', [TodoController::class, 'delete']);
});

Route::get('/todo', [TodoController::class, 'get']);
Route::post('/todo', [TodoController::class, 'post']);
Route::post('/todo/update', [TodoController::class, 'post']);
Route::post('/todo/delete', [TodoController::class, 'post']);