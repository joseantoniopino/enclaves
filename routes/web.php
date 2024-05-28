<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $a = 1;
    $b = 2;
    $c = 3;
    $d = 4;
    $e = $a + $b + $c;
    return view('welcome');
});
