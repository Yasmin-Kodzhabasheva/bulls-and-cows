<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\UsersController;


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
    return view('landing');
});

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/register-form', function() {
    return view('register-form');
});

Route::get('/login-form', function() {
    return view('login-form');
})->name('login');

Route::get('/ranking', [GameController::class, "rankPlayers"])->middleware('auth');


Route::post('/register', [UsersController::class, 'register']);
Route::post('/login', [UsersController::class, 'login']);
Route::post('/logout', [UsersController::class, 'logout']);
Route::post('/game-score', [GameController::class, 'addScore']);


