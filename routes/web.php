<?php

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

Route::get('/api/agencies', [AgencyController::class, 'index']);
Route::get('/api/agencies/{id}', [AgencyController::class, 'show']);
Route::post('/api/agencies/', [AgencyController::class, 'store']);
Route::put('/api/agency/{id}', [AgencyController::class, 'update']);
Route::delete('/api/agencies/{id}', [AgencyController::class, 'destroy']);
Route::get('/agency/new', [AgencyController::class, 'newView']);
Route::get('/agency/edit/{id}', [AgencyController::class, 'editView']);
Route::get('/agency/list', [AgencyController::class, 'listView']);
