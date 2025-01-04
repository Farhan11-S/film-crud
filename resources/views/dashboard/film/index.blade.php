@extends('layouts.sidebar')
@section('content')

<a href="/"
    class="text-white bg-gradient-to-r from-pink-500 via-pink-600 to-pink-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2">Buat
    Film</a>
<div class="relative overflow-x-auto sm:rounded-lg mt-5">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200">
            <tr>
                <th scope="col" class="px-6 py-3">
                    NO
                </th>
                <th scope="col" class="px-6 py-3">
                    Poster
                </th>
                <th scope="col" class="px-6 py-3">
                    Judul
                </th>
                <th scope="col" class="px-6 py-3">
                    Tahun Rilis
                </th>
                <th scope="col" class="px-6 py-3">
                    Direktur
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b hover:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    1
                </th>
                <td class="px-6 py-4">
                    <img src="storages/" width="100px" height="100px" alt="pp">
                </td>
                <td class="px-6 py-4">
                    Hantu Horor
                </td>
                <td class="px-6 py-4">
                    2020
                </td>
                <td class="px-6 py-4">
                    Sangaji
                </td>
                <td class="px-6 py-4 space-x-2 flex items-center justify-center">
                    <a href="#"
                        class="bg-sky-100 p-2 rounded-full hover:bg-sky-600 hover:text-white transition-colors font-medium text-sky-600 hover:underline">
                        Lihat
                    </a>
                    <a href="#"
                        class="bg-yellow-100 p-2 rounded-full hover:bg-yellow-300 hover:text-white transition-colors font-medium text-yellow-300 hover:underline">
                        Edit
                    </a>
                    <form action="#" method="POST">
                        <button type="submit"
                            class="bg-red-100 p-2 rounded-full hover:bg-red-600 hover:text-white transition-colors font-medium text-red-500 hover:underline">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection