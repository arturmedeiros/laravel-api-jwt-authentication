<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// ROUTES - AUTHENTICATION
Route::prefix('v1/auth')->group(function () {
    /* Login */
    Route::post('login', [AuthController::class, 'login']);
    /* Logout */
    Route::post('logout', [AuthController::class, 'logout']);
    /* Me (User Logged) */
    Route::post('me', [AuthController::class, 'me']);
});

// ROUTES - PROTECTED API'S
Route::group(['middleware' => 'auth:api'], function () {

    // API - V1
    Route::prefix('v1')->group(function () {

        /* Users */
        Route::apiResource('users', UserController::class);

    });

});
