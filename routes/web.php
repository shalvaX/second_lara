<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::get('/car/create', 'App\Http\Controllers\CarController@createcar');
Route::get('/car','App\Http\Controllers\CarController@viewCars');
