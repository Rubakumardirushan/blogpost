<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return 'test';
});
// test my git 
Route::get('/test2', function () {
    return 'test2';
});