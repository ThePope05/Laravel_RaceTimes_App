<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Circuit;

class CircuitController extends Controller
{
    public function index()
    {
        $circuits = Circuit::all();
        return view('circuit.index', compact('circuits'));
    }

    public function create()
    {
        return view('circuit.form', ['formAction' => 'circuit.store']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'country' => 'required',
            'length' => 'required',
        ]);

        $circuit = Circuit::create($request->all());

        return redirect()->route('circuit.index', $circuit);
    }

    public function show(Circuit $circuit)
    {
        return view('circuit.show', compact('circuit'));
    }

    public function edit(Circuit $circuit)
    {
        return view('circuit.edit', compact('circuit'));
    }

    public function update(Request $request, Circuit $circuit)
    {
        $request->validate([
            'name' => 'required',
            'country' => 'required',
            'length' => 'required',
        ]);

        $circuit->update($request->all());

        return redirect()->route('circuit.show', $circuit);
    }

    public function destroy(Circuit $circuit)
    {
        $circuit->delete();

        return redirect()->route('circuit.index');
    }
}
