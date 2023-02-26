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
Route::group(['prefix' => 'user'], function () {
    Route::get('/', [TodoController::class, 'index']);
    Route::get('add', [TodoController::class, 'add']);
    Route::get('edit', [TodoController::class, 'edit']);
    Route::get('del', [TodoController::class, 'del']);
});



//追加するコード

Route::get('/', function () { return view('index');});
Route::post('/', [TestController::class, 'post']);
// Route::get('/', function () {
//     return view('welcome');
// });