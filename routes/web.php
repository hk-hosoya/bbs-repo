<?php

use App\Http\Controllers\MessageBoardController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/MessageBoard', [MessageBoardController::class, 'add']);
Route::post('/MessageBoard/confirm', [MessageBoardController::class, 'confirm']);
Route::get('/MessageBoard/complete', function () {
    return view('MessageBoard.complete'); //これは？？再読み込み？？？
});
Route::get('/MessageBoard/list', [MessageBoardController::class, 'list']);
// Route::post('/MessageBoard/search', [MessageBoardController::class, 'list']);

// Route::get('/MessageBoard/list/{search}', [MessageBoardController::class, 'search']);

Route::post('/MessageBoard/delete/{id}', [MessageBoardController::class, 'delete']);
Route::get('/MessageBoard/edit/{id}', [MessageBoardController::class, 'edit']);
Route::post('/MessageBoard/edit/{id}', [MessageBoardController::class, 'update']);
