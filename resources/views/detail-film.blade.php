@extends('layouts.sidebar')
@section('content')

<div class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8">
    <div class="flex space-x-4">
        <img class="rounded-t-lg w-40 h-40" src="{{ asset('storage/' . $film->poster) }}" alt="" />
        <div>
            <h5 class="mb-2 text-3xl font-bold text-gray-900">{{ $film->judul }}</h5>
            <p class="text-gray-500">Tahun Rilis : {{ $film->tahun_rilis }}</p>
            <p class="text-gray-500">Direktur : {{ $film->direktur }}</p>
        </div>
    </div>
    <div class="mt-5">
        <h4 class="text-4xl font-semibold">Sinopsis</h4>
        <p class="mt-2 text-gray-500 text-justify">{{ $film->sinopsis }}</p>
    </div>
</div>

<div class="mt-4">
    @if (auth()->check() && auth()->user()->role !== 'admin')
    <form action="/komentar/{{$film->id}}" method="post">
        @csrf
        <textarea id="isi" rows="4" name="isi"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
            placeholder="Komentar......"></textarea>
        <button type="submit"
            class="mt-2 text-white bg-pink-400 hover:bg-pink-800 focus:ring-4 focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Kirim</button>
    </form>
    @endif

    <div class="space-y-3 mt-2">
        @foreach ($film->komentar as $komentar)
        <div class="p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">{{ $komentar->user->nama }}</h5>
            <p class="font-normal text-gray-700 text-sm">{{ $komentar->isi }}</p>
        </div>
        @endforeach
    </div>
</div>

@endsection