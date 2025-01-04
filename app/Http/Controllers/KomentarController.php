<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use App\Http\Requests\StoreKomentarRequest;
use App\Http\Requests\UpdateKomentarRequest;

class KomentarController extends Controller
{
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
}
