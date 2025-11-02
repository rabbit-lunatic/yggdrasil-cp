<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/account', [AccountController::class, 'show']);
Route::post('/account', [AccountController::class, 'login']);
Route::post('/account/register', [AccountController::class, 'register']);
Route::get('/account/profile', [AccountController::class, 'profile']);
Route::get('/account/game-accounts', [AccountController::class, 'gameAccounts']);
Route::post('/account/game-accounts', [AccountController::class, 'createGameAccount']);
Route::get('/account/ygg-points', [AccountController::class, 'yggPoints']);
Route::get('/account/orders', [AccountController::class, 'orders']);
Route::post('/logout', [AccountController::class, 'logout']);
Route::post('/account/game-accounts', [AccountController::class, 'createGameAccount']);

Route::get('/download', function () {
    return view('download');
});

Route::get('/us', function () {
    return view('us');
});
