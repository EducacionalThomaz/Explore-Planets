<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\GameController;
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
    return view('./client_connect/initialPage');
});

Route::get('/game/mode', function () {
    return view('./game/pages/mode');
});

Route::get('/game/quiz', function () {
    return view('./game/pages/quiz');
});


Route::post('/auth', [UserController::class, 'auth'])->name('user.auth');

Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');

Route::resource('user', UserController::class);

Route::get('game', [GameController::class, 'index'])->name('game');

Route::get('game/levels', [GameController::class, 'level'])->name('game.level');