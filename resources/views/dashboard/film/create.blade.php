@extends('layouts.sidebar')
@section('content')

<form method='POST' action='#' class="flex items-center justify-center">
    <div class="bg-white px-10 py-8 rounded-xl w-screen shadow-xl max-w-sm">
        <div class="space-y-4">
            <h1 class="text-center text-2xl font-semibold text-gray-600">Buat Film</h1>
            <hr>
            <div class="flex items-center border-2 py-2 px-3 rounded-md mb-4">
                <input class="pl-2 outline-none border-none w-full" type="text" name="judul" value=""
                    placeholder="Judul Film" required />
            </div>
            <span class="my-5 text-sm text-red-600">
                Masukan judul
            </span>
            <div class="flex items-center border-2 py-2 px-3 rounded-md mb-4">
                <input class="pl-2 outline-none border-none w-full" type="text" name="direktur" value=""
                    placeholder="Direktur" required />
            </div>
            <span class="my-5 text-sm text-red-600">
                Masukan direktur
            </span>
            <div class="flex items-center border-2 py-2 px-3 rounded-md mb-4">
                <input class="pl-2 outline-none border-none w-full" type="number" name="tahun_rilis" value=""
                    placeholder="Tahun Rilis" required />
            </div>
            <span class="my-5 text-sm text-red-600">
                Masukan tahun rilis
            </span>
            <div class="flex items-center mb-4">
                <textarea id="message" rows="4" name="sinopsis"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Sinopsis film......"></textarea>
            </div>
            <span class="my-5 text-sm text-red-600">
                Masukan sinopsis film
            </span>

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload
                    poster</label>
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                    id="file_input" type="file" name="poster">
                <p class="mt-1 text-sm text-gray-500" id="file_input_help">PNG, JPG or
                    JPEG.</p>
            </div>
            <span class="text-sm text-red-600">
                Masukan file poster
            </span>
        </div>

        <button type="submit" value="login" id="login"
            class="mt-6 w-full shadow-xl bg-gradient-to-tr from-blue-600 to-red-400 hover:to-red-700 text-indigo-100 py-2 rounded-md text-lg tracking-wide transition duration-1000">Simpan</button>
    </div>
</form>

@endsection