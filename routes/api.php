<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Src\BoundedContext\Main\Users\Infrastructure\Controllers\UserLoginController;
use Src\BoundedContext\Main\Users\Infrastructure\Controllers\UserRegisterController;
use Src\BoundedContext\Shared\Main\Roll\Infrastructure\Controllers\RollController;

/*Route::get('/user/test', function (Request $request) {
    return $request->user()->toArray();
})->middleware('auth:sanctum');*/

Route::post('/roll', RollController::class);

Route::group(['prefix' => 'user'], function () {
    Route::post('register', UserRegisterController::class);
    Route::post('/login', UserLoginController::class);
    /*Route::post('/logout', 'Src\BoundedContext\Main\Users\Infrastructure\Controllers\UserLogoutController')*/;
});
