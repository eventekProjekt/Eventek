<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

/*---------------------- User routes -----------------------------*/
Route::get('/api/users', [UserController::class, 'index']);
Route::get('/api/users/{id}', [UserController::class, 'show']);
Route::post('/api/users/', [UserController::class, 'store']);
Route::put('/api/user/{id}', [UserController::class, 'update']);
Route::delete('/api/users/{id}', [UserController::class, 'destroy']);
Route::get('/user/new', [UserController::class, 'newView']);
Route::get('/user/edit/{id}', [UserController::class, 'editView']);
Route::get('/user/list', [UserController::class, 'listView']);
/*--------------------------------------------------------------*/
