<?php

use Illuminate\Support\Facades\Route;



Route::get('/', '\App\Http\Controllers\CarController@viewCars')
    ->name('cars.all')
    ->middleware('guest');
Route::post('/cars/create', '\App\Http\Controllers\CarController@createCar')->name('cars.save');
Route::get('/cars/{id}/edit', '\App\Http\Controllers\CarController@editCar')->name('carss.edit');
Route::post('/cars/{id}/update', '\App\Http\Controllers\CarController@updateCar')->name('cars.update');
Route::post('/cars/delete', '\App\Http\Controllers\CarController@deleteCar')->name('cars.delete');
