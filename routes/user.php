<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// The Route to display all the users
Route::get('/users', [UserController::class, 'index']);

// The Route to display a specific user
Route::get('/users/{id}', [UserController::class, 'show']);

// The Route to create a new user
Route::post('/users', [UserController::class, 'create']);

// The Route to login the user
Route::post('/login', [UserController::class, 'login']);

// The Route to resend authenticated user account
Route::post('/me', [UserController::class, 'me'])->middleware('auth:sanctum');

// The Route to update a specific user
Route::put('/users/{id}', [UserController::class, 'update']);

// The Route to delete a specific user
Route::delete('/users/{id}', [UserController::class, 'delete']);
