@extends('film.sidebar')
@section('content')

<div class="grid grid-cols-1 lg:grid-cols-3 gap-3">
    @foreach ($film as $f)
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
        <a href="#">
            <img class="rounded-t-lg" src="{{ asset('storage/' . $f->poster) }}"
                alt="poster untuk judul film {{ $f->judul }}" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">{{ $f->judul }}</h5>
            </a>
            <p class="mb-3 text-sm font-normal text-gray-700">{{ Str::limit($f->sinopsis, 100) }}</p>
            <a href="{{ route('film.show', $f->id) }}"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-pink-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                Lengkapnya
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </div>
    @endforeach
</div>

@endsection