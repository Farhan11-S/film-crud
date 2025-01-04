@extends('layouts.sidebar')
@section('content')

<div class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8">
    <div class="flex space-x-4">
        <img class="rounded-t-lg w-40 h-40"
            src="https://img.okezone.com/okz/500/library/images/2024/08/07/film_lembayung_21737.jpg" alt="" />
        <div>
            <h5 class="mb-2 text-3xl font-bold text-gray-900">Work fast from anywhere</h5>
            <p class="text-gray-500">Tahun Rilis : 2020</p>
            <p class="text-gray-500">Direktur : 2020</p>
        </div>
    </div>
    <div class="mt-5">
        <h4 class="text-4xl font-semibold">Sinopsis</h4>
        <p class="mt-2 text-gray-500 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Integer velit dolor, vulputate quis nulla sit amet, laoreet
            lobortis purus. Vestibulum et est lobortis, sagittis tortor id, pellentesque lorem. Sed congue
            non diam nec tristique.
            Nunc efficitur nibh elit, sit amet dictum enim malesuada sit amet. Mauris fermentum hendrerit
            lorem, tristique sodales
            lacus commodo nec. Nulla rhoncus magna ac blandit dapibus. Nam malesuada gravida nisl. Sed
            malesuada neque sit amet
            neque aliquet vehicula. Pellentesque iaculis sapien a euismod pulvinar. Sed lobortis mi et neque
            sollicitudin, ac
            gravida odio venenatis. Nam egestas lorem vestibulum mauris auctor, vitae condimentum sapien
            pharetra. Proin sagittis
            sollicitudin lacus, venenatis dapibus nunc lobortis tempus. Suspendisse potenti. Vivamus gravida
            nulla in odio lobortis,
            et aliquam odio sollicitudin. Donec quis accumsan neque, id rutrum diam.</p>
    </div>
</div>

<div class="mt-4">
    <form action="#">
        <textarea id="isi" rows="4" name="isi"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
            placeholder="Komentar......"></textarea>
        <button type="submit"
            class="mt-2 text-white bg-pink-400 hover:bg-pink-800 focus:ring-4 focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Kirim</button>
    </form>

    <div class="space-y-3 mt-2">
        <div class="p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">Paijo</h5>
            <p class="font-normal text-gray-700 text-sm">Here are the biggest enterprise
                technology acquisitions of
                2021 so far, in reverse chronological order.</p>
        </div>
    </div>
</div>

@endsection