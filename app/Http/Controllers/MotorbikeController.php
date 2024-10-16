<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

use App\Models\Motorbike;

class MotorbikeController extends Controller
{

    //Display motos list
    public function index()
    {
        $motorbikes = Motorbike::all();
        return view('motorbikes.index', compact('motorbikes'));
    }



    //Redirect to createa new motorbike form
    public function create()
    {
        return view('motorbikes.create');
    }



    //Store a new moto
    public function store(Request $request, Motorbike $motorbike)
    {
        $motorbike = new Motorbike;
        $motorbike->model = $request->input('model');
        $motorbike->cylinderCap = $request->input('cylinderCap');
        $motorbike->color = $request->input('color');
        $motorbike->save();

        return redirect()->route('motorbikes.index');
    }

    //Edit form
    public function edit(Motorbike $motorbike)
    {
        return view('motorbikes.edit', compact('motorbike'));
    }



    //Update moto info
    public function update(Request $request, Motorbike $motorbike): RedirectResponse
    {
        $motorbike->update($request->all());
        
        return redirect()->route('motorbikes.index');
    }



    //Delete a motorbike
    public function destroy(Motorbike $motorbike)
    {
        $motorbike->delete();

        return redirect()->route('motorbikes.index');
    }
}
