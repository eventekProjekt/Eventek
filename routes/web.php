<?php

use App\Http\Controllers\EventsController;
use App\Http\Controllers\ParticipatesController;
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

//event endpoints
Route::get('/api/events', [EventsController::class, 'index']);
Route::get('/api/events/{id}', [EventsController::class, 'show']);
Route::post('/api/events/', [EventsController::class, 'store']);
Route::put('/api/event/{id}', [EventsController::class, 'update']);
Route::delete('/api/events/{id}', [EventsController::class, 'destroy']);
Route::get('/event/new', [EventsController::class, 'newView']);
Route::get('/event/edit/{id}', [EventsController::class, 'editView']);
Route::get('/event/list', [EventsController::class, 'listView']);

//participate end points
Route::get('/api/participates', [ParticipatesController::class, 'index']);
Route::get('/api/participates/{id}', [ParticipatesController::class, 'show']);
Route::post('/api/participates/', [ParticipatesController::class, 'store']);
Route::put('/api/participate/{id}', [ParticipatesController::class, 'update']);
Route::delete('/api/participates/{id}', [ParticipatesController::class, 'destroy']);
Route::get('/participate/new', [ParticipatesController::class, 'newView']);
Route::get('/participate/edit/{id}', [ParticipatesController::class, 'editView']);
Route::get('/participate/list', [ParticipatesController::class, 'listView']);
