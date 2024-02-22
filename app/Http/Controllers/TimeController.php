<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Time;

class TimeController extends Controller
{
    public function index()
    {
        return view('time.index');
    }

    public function create()
    {
        return view('time.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'time' => 'required',
            'circuit_id' => 'required',
            'user_id' => 'required',
        ]);

        $time = Time::create($request->all());

        return redirect()->route('time.show', $time);
    }

    public function show($time)
    {
        return view('time.show');
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
