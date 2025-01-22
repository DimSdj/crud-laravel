<?php

namespace App\Http\Controllers;
use App\Models\Woning;
use Illuminate\Http\Request;

class WoningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $woning = Woning::all();

        return view('woning.index', compact('woning')); // -> resources/views/woning/index.blade.php
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('woning.create'); // -> resources/views/woning/create.blade.php
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'naam' => 'required',
            'beschrijving' => 'required',
            'oppervlakte_m2' => 'required|numeric',
            'huur_per_week' => 'required|numeric|'
        ]);
        // Getting values from the blade template form
        $woning = new Woning([
            'naam' => $request->get('naam'),
            'beschrijving' => $request->get('beschrijving'),
            'oppervlakte_m2' => $request->get('oppervlakte_m2'),
            'huur_per_week' => $request->get('huur_per_week')
        ]);
        $woning->save();
        return redirect('/woning')->with('success', 'Woning saved.');   // -> resources/views/woning/index.blade.php
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $woning = Woning::find($id);
        return view('woning.edit', ['woning' => $woning]);  // -> resources/views/woning/edit.blade.php
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'naam' => 'required',
            'beschrijving' => 'required',
            'oppervlakte_m2' => 'required|numeric',
            'huur_per_week' => 'required|numeric|'
        ]);
        $woning = Woning::find($id);
        // Getting values from the blade template form
        $woning->naam = $request->get('naam');
        $woning->beschrijving = $request->get('beschrijving');
        $woning->oppervlakte_m2 = $request->get('oppervlakte_m2');
        $woning->huur_per_week = $request->get('huur_per_week');
        $woning->save();

        return redirect('/woning'); // -> resources/views/woning/index.blade.php
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $woning = Woning::find($id);
        $woning->delete(); // Easy right?

        return redirect('/woning');  // -> resources/views/woning/index.blade.php
    }

    public function showDescription($id)
{
    $woning = Woning::find($id);
    return response()->json([
        'beschrijving' => $woning->beschrijving
    ]);
}
 
public function showDescriptionPage($id)
{
    $woning = Woning::find($id);
 
    if ($woning) {
        return view('woning.description', ['woning' => $woning]);
    } else {
        return redirect('/woning')->with('error', 'Woning niet gevonden.');
    }
}


}
