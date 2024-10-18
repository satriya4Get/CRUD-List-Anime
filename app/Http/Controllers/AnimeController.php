<?php

namespace App\Http\Controllers;

use App\Models\anime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller;


class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anime = Anime::orderBy('id', 'desc')->get();
        return view('animes.index', compact('anime'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('animes/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required', 
            'genre' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Anime::create([
            'title' => $request->title,
            'rating' => $request->rating,
            'genre' => $request->genre,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('anime.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(anime $anime)
    {
        return view('animes.show', compact('anime'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(anime $anime)
    {
        return view('animes.edit', compact('anime'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, anime $anime)
    {
        $request->validate([
            'title' => 'required',
            'rating' => 'required',
            'genre' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($anime->image);
            $imagePath = $request->file('image')->store('images', 'public');
            $anime->image = $imagePath;
            $anime->save();
        }
        $anime->update([
            'title' => $request->input('title'),
            'rating' => $request->input('rating'),
            'genre' => $request->input('genre'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('animes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(anime $anime)
    {
        Storage::disk('public')->delete($anime->image);
        $anime->delete();
        return redirect()->route('animes.index');
    }
}
