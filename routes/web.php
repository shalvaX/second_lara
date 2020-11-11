<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('create');
});
Route::get('/car/create', 'App\Http\Controllers\CarController@createcar');
Route::get('/car','App\Http\Controllers\CarController@viewCars');
