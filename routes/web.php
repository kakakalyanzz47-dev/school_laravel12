<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('webbschool');
});

Route::get('/webbschool', function () {
    return view('webbschool');
});
