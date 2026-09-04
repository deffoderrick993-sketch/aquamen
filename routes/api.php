<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SignalementController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/chatbot/message', [ChatbotController::class, 'handleMessage'])->name('chatbot.message');
Route::get('/search', [SearchController::class, 'search'])->name('api.search');
Route::post('/signalement', [SignalementController::class, 'store'])->name('api.signalement');


