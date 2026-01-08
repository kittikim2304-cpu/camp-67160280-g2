<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokedex;

class PokedexController extends Controller
{
    public function index()
    {
        $pokedexs = Pokedex::all();
        return view('pokedexs.index', compact('pokedexs'));
    }

    public function create()
    {
        return view('pokedexs.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'species' => 'required|string|max:255',
            'height' => 'required|integer',
            'weight' => 'required|integer',
            'hp' => 'required|numeric',
            'attack' => 'required|numeric',
            'defense' => 'required|numeric',
            'image_url' => 'nullable|string|max:1000',
        ]);

        Pokedex::create($data);

        return redirect()->route('pokedexs.index')->with('success', 'Pokedex created');
    }

    public function show(Pokedex $pokedex)
    {
        return view('pokedexs.show', compact('pokedex'));
    }

    public function edit(Pokedex $pokedex)
    {
        return view('pokedexs.edit', compact('pokedex'));
    }

    public function update(Request $request, Pokedex $pokedex)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'species' => 'required|string|max:255',
            'height' => 'required|integer',
            'weight' => 'required|integer',
            'hp' => 'required|numeric',
            'attack' => 'required|numeric',
            'defense' => 'required|numeric',
            'image_url' => 'nullable|string|max:1000',
        ]);

        $pokedex->update($data);

        return redirect()->route('pokedexs.index')->with('success', 'Pokedex updated');
    }

    public function destroy(Pokedex $pokedex)
    {
        $pokedex->delete();
        return redirect()->route('pokedexs.index')->with('success', 'Pokedex deleted');
    }
}
