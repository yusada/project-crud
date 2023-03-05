<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function index()
    {
        $animes = Anime::all();
        return view('animes.index', compact('animes'));
    }

    public function create()
    {
        return view('animes.create');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'genre' => 'required|max:255',
            'release_year' => 'required|numeric',
            'image' => 'image|file|max:4096',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        Anime::create($validatedData);

        return redirect()->route('animes.index')->with('success', 'Anime created successfully.');
    }

    public function show($id)
    {
        $anime = Anime::findOrFail($id);
        return view('animes.show', compact('anime'));
    }

    public function edit($id)
    {
        $anime = Anime::findOrFail($id);

        return view('animes.edit', compact('anime'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'genre' => 'required|max:255',
            'release_year' => 'required|numeric',
            'image' => '',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $anime = Anime::findOrFail($id);
        $anime->update($validatedData);

        return redirect()->route('animes.index')->with('success', 'Anime berhasil diupdate.');
    }

    public function destroy($id)
    {
        $anime = Anime::findOrFail($id);
        $anime->delete();

        return redirect()->route('animes.index')->with(
            'success',
            'Anime berhasil di hapus.'
        );
    }
};
