<?php

use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\PhotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\ProductController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);
Route::get('/ping', function () {
    return response()->json(['message' => 'API working!']);
});

Route::get('/photos', [PhotoController::class, 'index']);
Route::post('/photos',[PhotoController::class, 'store']);
Route::get('/photos/{id}',[PhotoController::class, 'show']);
Route::put('/photos/{id}', [PhotoController::class, 'update']);
Route::delete('/photos/{id}',[PhotoController::class, 'destroy']);
Route::get('/photos/ping',function(){
    return response()->json(['message' => 'photo working!']);
});

Route::get('/events',[EventController::class, 'index']);
Route::post('/events', [EventController::class, 'store']);
Route::get('/events/{id}', [EventController::class, 'show']);
Route::put('/events/{id}', [EventController::class, 'update']);
Route::delete('/events/{id}', [EventController::class, 'destroy']);

Route::get('/blogs',[BlogController::class, 'index']);
Route::post('/blogs', [BlogController::class, 'store']);
Route::get('/blogs/{id}', [BlogController::class, 'show']);
Route::put('/blogs/{id}', [BlogController::class, 'update']);
Route::delete('/blogs/{id}', [BlogController::class, 'destroy']);

Route::get('/produtcs',[ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);