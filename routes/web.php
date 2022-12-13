<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('tartalom');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
Route::middleware(['agency'])->group(function () {
    /*--------------------------------------------------------------*/
    //event endpoints
    Route::get('/api/events', [EventsController::class, 'index']);
    Route::get('/api/events/{id}', [EventsController::class, 'show']);
    Route::post('/api/events/', [EventsController::class, 'store']);
    Route::put('/api/event/{id}', [EventsController::class, 'update']);
    Route::get('/event/new', [EventsController::class, 'newView']);
    Route::get('/event/edit/{id}', [EventsController::class, 'editView']);
    Route::get('/event/list', [EventsController::class, 'listView']);
});

Route::middleware(['auth.basic'])->group(function () {
    Route::get('/api/events', [EventsController::class, 'index']);
    Route::get('/event/list', [EventsController::class, 'listView']);
});


Route::middleware(['admin'])->group(function () {
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
    Route::get('/api/agencies', [AgencyController::class, 'index']);
    Route::get('/api/agencies/{id}', [AgencyController::class, 'show']);
    Route::post('/api/agencies/', [AgencyController::class, 'store']);
    Route::put('/api/agency/{id}', [AgencyController::class, 'update']);
    Route::delete('/api/agencies/{id}', [AgencyController::class, 'destroy']);
    Route::get('/agency/new', [AgencyController::class, 'newView']);
    Route::get('/agency/edit/{id}', [AgencyController::class, 'editView']);
    Route::get('/agency/list', [AgencyController::class, 'listView']);
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
Route::get('/api/agencies', [AgencyController::class, 'index']);
Route::get('/api/agencies/{id}', [AgencyController::class, 'show']);
Route::post('/api/agencies/', [AgencyController::class, 'store']);
Route::put('/api/agency/{id}', [AgencyController::class, 'update']);
Route::delete('/api/agencies/{id}', [AgencyController::class, 'destroy']);
Route::get('/agency/new', [AgencyController::class, 'newView']);
Route::get('/agency/edit/{id}', [AgencyController::class, 'editView']);
Route::get('/agency/list', [AgencyController::class, 'listView']);
