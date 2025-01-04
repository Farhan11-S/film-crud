<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use App\Http\Requests\StoreKomentarRequest;
use App\Http\Requests\UpdateKomentarRequest;

class KomentarController extends Controller
{
    public function index()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('home');
        }

        $komentar = Komentar::all();
        return view('dashboard.komentar.index', compact('komentar'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKomentarRequest $request, $filmId)
    {
        $validated = $request->validated();
        $komentar = new Komentar();
        $komentar->user_id = auth()->id();
        $komentar->film_id = $filmId;
        $komentar->isi = $validated['isi'];
        $komentar->save();

        return redirect()->route('film.show', $filmId);
    }

    public function destroy(Komentar $komentar)
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('home');
        }

        $komentar->delete();

        return redirect()->route('komentar.index');
    }
}