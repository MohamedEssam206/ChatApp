<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => redirect()->route('login'));

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::middleware('auth')->group(function() {
    route::get('/users', [ChatController::class, 'index'])->name('users');
    route::get('/chat/{receverId}', [ChatController::class, 'chat'])->name('chat');
    route::post('/chat/{receverId}/send', [ChatController::class, 'sendMessage'])->name('sendMessage');
    route::post('/chat/typing', [ChatController::class, 'typing']);
    route::get('/online', [ChatController::class, 'setOnline']);
    route::get('/offline', [ChatController::class, 'setOffline']);
});