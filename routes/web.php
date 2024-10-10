<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/defer', function() {
    defer(function() {
        sleep(2);
        \Log::info('Hello world!');
    });
    return view('defer');
});
