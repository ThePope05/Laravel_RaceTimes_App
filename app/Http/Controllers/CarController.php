<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    public function index()
    {
        $cars = Auth::user()->cars;

        return view('car.index', ['cars' => $cars]);
    }

    public function create()
    {
        return view('car.form', ['formAction' => 'car.store']);
    }

    public function store(Request $request)
    {
        $car = new Car();

        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->year = $request->year;
        $car->power = $request->power;
        $car->torque = $request->torque;
        $car->weight = $request->weight;
        $car->user_id = Auth::user()->id;

        $car->save();

        return redirect()->route('car.index');
    }

    public function show($car)
    {
        return view('car.show');
    }

    public function edit($car)
    {
        return view('car.edit');
    }

    public function update(Request $request, $car)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'user_id' => 'required|integer'
        ]);

        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->year = $request->year;
        $car->user_id = $request->user_id;

        $car->save();

        return redirect()->route('car.index');
    }

    public function destroy($car)
    {
        $car->delete();

        return redirect()->route('car.index');
    }
}
