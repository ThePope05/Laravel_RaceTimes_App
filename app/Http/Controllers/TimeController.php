<?php

namespace App\Http\Controllers;

use App\Models\Circuit;
use App\Models\Car;

use Illuminate\Http\Request;
use App\Models\Time;

class TimeController extends Controller
{
    public function index()
    {
        $times = Time::all()->where('user_id', auth()->id());

        return view('time.index', ['times' => $times]);
    }

    public function create()
    {
        $circuits = Circuit::all();
        $cars = Car::all()->where('user_id', auth()->id());

        return view('time.form', ['formAction' => 'time.store', 'circuits' => $circuits, 'cars' => $cars]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'time' => 'required',
            'circuit_id' => 'required',
            'car_id' => 'required',
        ]);

        $values = [
            'lap_time' => $request->time,
            'circuit_id' => $request->circuit_id,
            'car_id' => $request->car_id,
            'user_id' => auth()->id()
        ];

        $time = Time::create($values);

        return redirect()->route('time.index');
    }

    public function show($time)
    {
        $time = Time::find($time);
        $topLapTimes = Time::where('circuit_id', $time->circuit_id)->orderBy('lap_time', 'asc')->take(3)->get();

        return view('time.show', ['time' => $time, 'topLapTimes' => $topLapTimes]);
    }

    public function edit($time)
    {
        return view('time.edit');
    }

    public function update(Request $request, $time)
    {
        $request->validate([
            'time' => 'required',
            'circuit_id' => 'required',
            'user_id' => 'required',
        ]);

        $time->update($request->all());

        return redirect()->route('time.show', $time);
    }

    public function destroy($time)
    {
        //
    }
}
