<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Src\BoundedContext\Shared\Main\Roll\Infrastructure\Controllers\RollController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/roll', RollController::class);
