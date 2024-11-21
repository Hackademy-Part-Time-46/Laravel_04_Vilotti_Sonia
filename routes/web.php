<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('navbar', function () {
    return view('/components/navbar');
});
Route::get('footer', function () {
    return view('components/footer');
});