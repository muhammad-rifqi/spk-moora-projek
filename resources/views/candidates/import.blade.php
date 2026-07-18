<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Siswa Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                 <h2 class="text-2xl font-bold mb-6">Form Import Siswa</h2>
                    <form action="/candidates/imports" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Files -->
                        <div class="mb-4">
                            <label for="kode" class="block text-sm font-medium text-gray-700">
                                Kode
                            </label>
                            <input
                                type="file"
                                id="kode"
                                name="file_excel"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required
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

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
