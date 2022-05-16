<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    
    public function index()
    {
        $pets = Pet::all();
        return view('pets.index', compact('pets'));
    }

    public function create()
    {
        return view('pets.create');
    }

    public function store(Request $request){
        Pet::create($request->all());
        return redirect()->route('pets.index')
                        ->with('success','Pet inserted successfully');
    }

    public function show(Pet $pet)
    {
        return view('pets.show', compact('pet'));
    }

    public function showAll()
    {
        $pets = Pet::all();
        return view('pets.showAll', compact('pets'));
    }

    public function edit(Pet $pet)
    {
        return view('pets.edit', compact('pet'));
    }

    public function update(Request $request, Pet $pet)
    {
        $pet->name = $request->name;
        $pet->type = $request->type;
        $pet->owner = $request->owner;
        $pet->owner_address = $request->owner_address;
        $pet->save();
        return redirect()->route('pets.index')->with('success','Pet updated successfully');
    }

    public function destroy(Pet $pet)
    {
        $pet->delete();
        return redirect()->route('pets.index')
                        ->with('success','Pet deleted successfully');
    }
}
