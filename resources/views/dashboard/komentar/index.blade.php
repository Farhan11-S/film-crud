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
            <tr class="bg-white border-b hover:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    1
                </th>
                <td class="px-6 py-4">
                    Hantu Horor
                </td>
                <td class="px-6 py-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
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
                    et aliquam odio sollicitudin. Donec quis accumsan neque, id rutrum diam.
                </td>
                <td class="px-6 py-4 space-x-2 flex items-center justify-center">
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