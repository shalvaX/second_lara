<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\car;

class CarController extends Controller
{
    public function createCar(Request $request){
        $diff = abs(strtotime(date("Y-m-d")) - strtotime($request->registration_year));
        $age = floor($diff/(365*60*60*24));
        car::create([
            'name' => $request->name,
            'make' => $request->make,
            'license_number' => $request->license_number,
            'weight' => $request->weight,
            'registration_year' => $request->registration_year,
            'age' => $age,
        ]);

        return redirect()->route('cars.all');
    }

    public function viewCars(Request $request){
        $cars = car::orderBy('id', 'DESC');

        if ($request->id) {
            $cars->where('id', $request->id);
        }

        if ($request->name) {
            $cars->where('name', 'LIKE', '%' . $request->name . '%');
        }

        if ($request->category) {
            $cars->where('make', $request->make);
        }

        if ($request->price) {
            $cars->where('license_number',$request->license_number);
        }

        if ($request->stock) {
            $cars->where('weight', $request->weight);
        }

        if ($request->sale) {
            $cars->where('registration_year', $request->registration_year);
        }

        $cars = $cars->get();

        return view('home')->with('cars', $cars);
    }
}
