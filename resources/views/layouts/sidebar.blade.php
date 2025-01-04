@extends('layouts.main')
@section('container')

<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
    type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-red-500 rounded-lg sm:hidden hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-pink-200">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="default-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-pink-400 flex flex-col justify-between">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="/" class="flex items-center p-2 text-white rounded-lg  hover:bg-red-600 group">
                    <svg class="w-5 h-5 text-white transition duration-75  group-hover:text-white " fill="currentColor"
                        role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title />
                        <path
                            d="M11.435.153l-9.37 5.43c-.35.203-.564.578-.563.983V17.43c0 .404.215.78.564.982l9.37 5.435c.35.203.78.203 1.13 0l9.366-5.433c.35-.205.564-.578.565-.982V6.566c0-.404-.216-.78-.566-.984L12.567.152c-.35-.203-.782-.203-1.13 0" />
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/film" class="flex items-center p-2 text-white rounded-lg  hover:bg-red-600 group">
                    <svg class="w-5 h-5 text-white transition duration-75  group-hover:text-white " fill="currentColor"
                        role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title />
                        <path
                            d="M11.435.153l-9.37 5.43c-.35.203-.564.578-.563.983V17.43c0 .404.215.78.564.982l9.37 5.435c.35.203.78.203 1.13 0l9.366-5.433c.35-.205.564-.578.565-.982V6.566c0-.404-.216-.78-.566-.984L12.567.152c-.35-.203-.782-.203-1.13 0" />
                    </svg>
                    <span class="ms-3">Data Film</span>
                </a>
            </li>
            <li>
                <a href="/komentar" class="flex items-center p-2 text-white rounded-lg  hover:bg-red-600 group">
                    <svg class="w-5 h-5 text-white transition duration-75  group-hover:text-white " fill="currentColor"
                        role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title />
                        <path
                            d="M11.435.153l-9.37 5.43c-.35.203-.564.578-.563.983V17.43c0 .404.215.78.564.982l9.37 5.435c.35.203.78.203 1.13 0l9.366-5.433c.35-.205.564-.578.565-.982V6.566c0-.404-.216-.78-.566-.984L12.567.152c-.35-.203-.782-.203-1.13 0" />
                    </svg>
                    <span class="ms-3">Data Komentar</span>
                </a>
            </li>
        </ul>
        <div class="flex flex-col">
            @if (!auth()->check())
            <a href="/login" class="flex items-center p-2 text-white rounded-lg  hover:bg-red-600 group">
                <svg viewBox="0 0 24 24" class="w-5 h-5 text-white transition duration-75  group-hover:text-white "
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M12 23a7.5 7.5 0 0 1-5.138-12.963C8.204 8.774 11.5 6.5 11 1.5c6 4 9 8 3 14 1 0 2.5 0 5-2.47.27.773.5 1.604.5 2.47A7.5 7.5 0 0 1 12 23z" />
                    </g>
                </svg>
                <span class="ms-3">Login</span>
            </a>
            <a href="/register" class="flex items-center p-2 text-white rounded-lg  hover:bg-red-600 group">
                <svg viewBox="0 0 512 512" class="w-5 h-5 text-white transition duration-75  group-hover:text-white "
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <title />
                    <path
                        d="M256,43.91s-144,158.3-144,270.3c0,88.36,55.64,144,144,144s144-55.64,144-144C400,202.21,256,43.91,256,43.91Zm16,362.3v-24a60.07,60.07,0,0,0,60-60h24A84.09,84.09,0,0,1,272,406.21Z" />
                </svg>
                <span class="ms-3">Register</span>
            </a>
            @else
            <a href="/logout" class="flex items-center p-2 text-white rounded-lg  hover:bg-red-600 group">
                <svg viewBox="0 0 24 24" class="w-5 h-5 text-white transition duration-75  group-hover:text-white "
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M12 23a7.5 7.5 0 0 1-5.138-12.963C8.204 8.774 11.5 6.5 11 1.5c6 4 9 8 3 14 1 0 2.5 0 5-2.47.27.773.5 1.604.5 2.47A7.5 7.5 0 0 1 12 23z" />
                    </g>
                </svg>
                <span class="ms-3">Logout</span>
            </a>
            @endif
        </div>
    </div>
</aside>

<div class="p-4 sm:ml-64">
    <div class="p-4">
        @yield('content')
    </div>
</div>

@endsection