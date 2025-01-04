@extends('film.sidebar')
@section('content')

<div class="grid grid-cols-1 lg:grid-cols-3 gap-3">
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
        <a href="#">
            <img class="rounded-t-lg" src="https://cdn.pixabay.com/photo/2020/02/15/04/19/chicken-4849979_1280.jpg"
                alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">Noteworthy technology
                    acquisitions 2021</h5>
            </a>
            <p class="mb-3 text-sm font-normal text-gray-700">Here are the biggest enterprise
                technology
                acquisitions of 2021 so far, in reverse chronological order.</p>
            <a href="#"
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
</div>

@endsection