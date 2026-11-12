<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use App\Http\Requests\StoreLaptopRequest;
use App\Http\Requests\UpdateLaptopRequest;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laptops = Laptop::all();
        return view("listlaptop", compact("laptops"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("formlaptop");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Laptop::create([
            'brand' => $request->brand,
            'model' => $request->model,
            'processor' => $request->processor,
            'ram' => $request->ram,
        ]);
        return redirect('/listlaptop');
    }

    /**
     * Display the specified resource.
     */
    public function show(Laptop $laptop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laptop $laptop)
    {
        return view('editlaptop', compact('laptop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laptop $laptop)
{
    $validated = $request->validate([
        'brand'     => 'required|string|max:255',
        'model'     => 'required|string|max:255',
        'processor' => 'required|string|max:255',
        'ram'       => 'required|integer|min:1',
    ]);

    $laptop->update($validated);

    return redirect()->route('listlaptop');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laptop $laptop)
    {
        $laptop->delete();
        return redirect()->route('listlaptop');
    }
}
