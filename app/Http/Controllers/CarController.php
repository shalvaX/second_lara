<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\car;

class CarController extends Controller
{
    public function createCar(){
        car::create([
            "name"=>"hoe",
            'model'=>'2dsf',
            'make'=>'dsf',
            'license_number' => 'rr.r33.33',
            'weight' => 23,
            'registration_year' => '2020-11-11 21:52:06',
            'age' => 423
        ]);
        $cars = car::all();
        return redirect('/car');
    }

    public function viewCars(){
        $cars = car::all();
        return view('cars-page')->with('cars',$cars);
    }
}
