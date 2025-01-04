@extends('layouts.main')
@section('container')
<div class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="h-screen bg-gradient-to-br from-pink-600 to-cyan-300 flex justify-center items-center w-full">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method='POST' action='#'>
            @csrf
            <div class="bg-white px-10 py-8 rounded-xl w-screen shadow-xl max-w-sm">
                <div class="space-y-4">
                    <h1 class="text-center text-2xl font-semibold text-gray-600">Register</h1>
                    <hr>
                    <div class="flex items-center border-2 py-2 px-3 rounded-md mb-4">
                        <svg viewBox="0 0 32 32" class="h-5 w-5 text-gray-400" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <g data-name="user people person users man" id="user_people_person_users_man">
                                <path
                                    d="M23.74,16.18a1,1,0,1,0-1.41,1.42A9,9,0,0,1,25,24c0,1.22-3.51,3-9,3s-9-1.78-9-3a9,9,0,0,1,2.63-6.37,1,1,0,0,0,0-1.41,1,1,0,0,0-1.41,0A10.92,10.92,0,0,0,5,24c0,3.25,5.67,5,11,5s11-1.75,11-5A10.94,10.94,0,0,0,23.74,16.18Z" />
                                <path d="M16,17a7,7,0,1,0-7-7A7,7,0,0,0,16,17ZM16,5a5,5,0,1,1-5,5A5,5,0,0,1,16,5Z" />
                            </g>
                        </svg>
                        <input class="pl-2 outline-none border-none w-full" type="text" name="nama" value=""
                            placeholder="Nama" required />

                    </div>
                    <span class="my-5 text-sm text-red-600">
                        @foreach ($errors->get('nama') as $error)
                        {{ $error }}
                        @endforeach
                    </span>
                    <div class="flex items-center border-2 py-2 px-3 rounded-md mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                        <input class="pl-2 outline-none border-none w-full" type="email" name="email" value=""
                            placeholder="Email" required />

                    </div>
                    <span class="my-5 text-sm text-red-600">
                        @foreach ($errors->get('email') as $error)
                        {{ $error }}
                        @endforeach
                    </span>
                    <div class="flex items-center border-2 py-2 px-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <input class="pl-2 outline-none border-none w-full" type="password" name="password" id=""
                            placeholder="Password" required />

                    </div>
                    <span class="my-5 text-sm text-red-600">
                        @foreach ($errors->get('password') as $error)
                        {{ $error }}
                        @endforeach
                    </span>

                    <div class="flex items-center border-2 py-2 px-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <input class="pl-2 outline-none border-none w-full" type="password" name="password_confirmation"
                            id="" placeholder="Confirm Password" required />

                    </div>
                    <span class="my-5 text-sm text-red-600">
                        @foreach ($errors->get('password_confirmation') as $error)
                        {{ $error }}
                        @endforeach
                    </span>
                </div>

                <button type="submit" value="register" id="register"
                    class="mt-6 w-full shadow-xl bg-gradient-to-tr from-blue-600 to-red-400 hover:to-red-700 text-indigo-100 py-2 rounded-md text-lg tracking-wide transition duration-1000">Daftar</button>
                <hr>
                <div class="flex justify-center items-center mt-4">
                    <p class="inline-flex items-center text-gray-700 font-medium text-xs text-center">
                        <span class="ml-2">Sudah punya akun?<a href="/login"
                                class="text-xs ml-2 text-blue-500 font-semibold">Login sekarang &rarr;</a>
                        </span>
                    </p>
                </div>
            </div>
            <div class="pt-6 text-base font-semibold leading-7">
                <p class="font-sans text-red-500 text-md hover:text-red-800">
                    <a href="/" class="absolute">&larr; Beranda</a>
                </p>
            </div>
        </form>
    </div>
</div>
@endsection