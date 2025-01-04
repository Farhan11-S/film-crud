<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;
use Illuminate\Support\Facades\Storage;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function guest()
    {
        $film = Film::all();
        return view('films', compact('film'));
    }

    public function index()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('home');
        }

        $film = Film::all();
        return view('dashboard.film.index', compact('film'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('film.index');
        }

        return view('film.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFilmRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('poster')) {
            $posterPath = $request->file('poster')->store('posters', 'public');
            $validated['poster'] = $posterPath;
        }

        Film::create($validated);

        return redirect()->route('film.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        $film->load([
            'komentar',
            'komentar.user',
        ]);
        return view('detail-film', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('home');
        }

        return view('film.edit', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFilmRequest $request, Film $film)
    {
        $validated = $request->validated();

        if ($request->hasFile('poster')) {
            // Delete the old poster if it exists
            if ($film->poster) {
                Storage::disk('public')->delete($film->poster);
            }
            // Store the new poster
            $posterPath = $request->file('poster')->store('posters', 'public');
            $validated['poster'] = $posterPath;
        }
        $film->update($validated);

        return redirect()->route('film.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('home');
        }

        if ($film->poster) {
            Storage::disk('public')->delete($film->poster);
        }
        $film->delete();

        return redirect()->route('film.index');
    }
}
