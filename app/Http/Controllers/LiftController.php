<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lift;

class LiftController extends Controller
{
    public function index()
    {
        $lifts = Lift::latest()->paginate(10);
        return view('lifts.index', compact('lifts'));
    }

    public function create()
    {
        return view('lifts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'building_name' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:25',
            'address' => 'nullable|string',
        ]);

        Lift::create($validated);

        return redirect()->route('lifts.index')->with('success', 'Asansör başarıyla eklendi.');
    }

    public function show(Lift $lift)
    {
        return view('lifts.show', compact('lift'));
    }

    public function edit(Lift $lift)
    {
        return view('lifts.edit', compact('lift'));
    }

    public function update(Request $request, Lift $lift)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'building_name' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:25',
            'address' => 'nullable|string',
        ]);

        $lift->update($validated);

        return redirect()->route('lifts.index')->with('success', 'Asansör başarıyla güncellendi.');
    }

    public function destroy(Lift $lift)
    {
        $lift->delete();
        return redirect()->route('lifts.index')->with('success', 'Asansör başarıyla silindi.');
    }
}
