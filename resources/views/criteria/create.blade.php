<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kriteria Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                 <h2 class="text-2xl font-bold mb-6">Form Data Kriteria</h2>
                    <form action="/criteria/store" method="POST">
                        @csrf
                        <!-- Nama -->
                        <div class="mb-4">
                            <label for="kode" class="block text-sm font-medium text-gray-700">
                                Kode
                            </label>
                            <input
                                type="text"
                                id="kode"
                                name="kode"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                placeholder="Masukkan Kode"
                            >
                        </div>

                        <div class="mb-4">
                            <label for="nama_kriteria" class="block text-sm font-medium text-gray-700">
                                Nama Kriteria
                            </label>
                            <input
                                type="text"
                                id="nama_kriteria"
                                name="nama_kriteria"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                placeholder="Masukkan Nama Kriteria"
                            >
                        </div>                    

                        <div class="mb-4">
                            <label for="tipe" class="block text-sm font-medium text-gray-700">
                                Tipe
                            </label>
                            <input
                                type="radio"
                                id="tipe"
                                name="tipe"
                                value="benefit"
                            > Benefit

                             <input
                                type="radio"
                                id="tipe"
                                name="tipe"
                                value="cost"
                            > Cost

                        </div>

                        <div class="mb-4">
                            <label for="bobot" class="block text-sm font-medium text-gray-700">
                                Bobot
                            </label>
                            <input
                                type="text"
                                id="bobot"
                                name="bobot"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                placeholder="Masukkan Bobot"
                            >
                        </div>

                        <!-- Tombol -->
                        <div>
                            <button
                                type="submit"
                                class="px-4 py-2 text-white rounded-md hover:bg-blue-700" style="background-color:blue"
                            >
                                Simpan
                            </button>

                            <button
                                type="reset"
                                class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600 ml-2"
                            >
                                Reset
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
