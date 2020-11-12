<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\car;

class CarController extends Controller
{
    public function createCar(Request $request){
        $cars = car::all();
        return view('create-page')->with('cars',$cars);
    }

    public function viewCars(){
        $cars = car::all();
        return view('cars-page')->with('cars',$cars);
    }
}
