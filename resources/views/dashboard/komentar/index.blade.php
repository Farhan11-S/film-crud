@extends('layouts.sidebar')
@section('content')

<div class="relative overflow-x-auto sm:rounded-lg mt-5">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200">
            <tr>
                <th scope="col" class="px-6 py-3">
                    NO
                </th>
                <th scope="col" class="px-6 py-3">
                    Author
                </th>
                <th scope="col" class="px-6 py-3">
                    Komentar
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($komentar as $i => $f)
            <tr class="bg-white border-b hover:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $i + 1 }}
                </th>
                <td class="px-6 py-4">
                    {{ $f->user->nama }}
                </td>
                <td class="px-6 py-4 text-justify">
                    {{ $f->isi }}
                </td>
                <td class="px-6 py-4 space-x-2 flex items-center justify-center">
                    <form action="{{route('komentar.destroy', ['komentar' => $f])}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="delete" />
                        <button type="submit"
                            class="bg-red-100 p-2 rounded-full hover:bg-red-600 hover:text-white transition-colors font-medium text-red-500 hover:underline">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection