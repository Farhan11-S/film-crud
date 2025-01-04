@extends('layouts.sidebar')
@section('content')

<form method='POST' action="{{route('film.update', ['film' => $film])}}" class="flex items-center justify-center" enctype="multipart/form-data">
    @csrf
    <div class="bg-white px-10 py-8 rounded-xl w-screen shadow-xl max-w-sm">
        <div class="space-y-4">
            <h1 class="text-center text-2xl font-semibold text-gray-600">Edit Film</h1>
            <hr>
            <div class="flex items-center border-2 py-2 px-3 rounded-md mb-4">
                <input class="pl-2 outline-none border-none w-full" type="text" name="judul" value="{{$film->judul}}"
                    placeholder="Judul Film" required />
            </div>
            @if ($errors->has('judul'))
            <span class="my-5 text-sm text-red-600">
                @foreach ($errors->get('judul') as $error)
                {{ $error }}
                @endforeach
            </span>
            @endif
            <div class="flex items-center border-2 py-2 px-3 rounded-md mb-4">
                <input class="pl-2 outline-none border-none w-full" type="text" name="direktur" value="{{$film->direktur}}"
                    placeholder="Direktur" required />
            </div>
            @if ($errors->has('direktur'))
            <span class="my-5 text-sm text-red-600">
                @foreach ($errors->get('direktur') as $error)
                {{ $error }}
                @endforeach
            </span>
            @endif
            <div class="flex items-center border-2 py-2 px-3 rounded-md mb-4">
                <input class="pl-2 outline-none border-none w-full" type="number" name="tahun_rilis" value="{{$film->tahun_rilis}}"
                    placeholder="Tahun Rilis" required />
            </div>
            @if ($errors->has('tahun_rilis'))
            <span class="my-5 text-sm text-red-600">
                @foreach ($errors->get('tahun_rilis') as $error)
                {{ $error }}
                @endforeach
            </span>
            @endif
            <div class="flex items-center mb-4">
                <textarea id="message" rows="4" name="sinopsis"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Sinopsis film......">{{$film->sinopsis}}</textarea>
            </div>
            @if ($errors->has('sinopsis'))
            <span class="my-5 text-sm text-red-600">
                @foreach ($errors->get('sinopsis') as $error)
                {{ $error }}
                @endforeach
            </span>
            @endif

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload
                    poster</label>
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                    id="file_input" type="file" name="poster">
                <p class="mt-1 text-sm text-gray-500" id="file_input_help">PNG, JPG or
                    JPEG.</p>
            </div>
            @if ($errors->has('poster'))
            <span class="my-5 text-sm text-red-600">
                @foreach ($errors->get('poster') as $error)
                {{ $error }}
                @endforeach
            </span>
            @endif
        </div>

        <input type="hidden" name="_method" value="put" />
        <button type="submit" value="login" id="login"
            class="mt-6 w-full shadow-xl bg-gradient-to-tr from-blue-600 to-red-400 hover:to-red-700 text-indigo-100 py-2 rounded-md text-lg tracking-wide transition duration-1000">Simpan</button>
    </div>
</form>

@endsection