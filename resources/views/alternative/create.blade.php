<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Altenative Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                 <h2 class="text-2xl font-bold mb-6">Form Data Altenative</h2>
                    <form action="/altenative/store" method="POST">
                        @csrf
                        <!-- Nama -->
                        <div class="mb-4">
                            <label for="c1" class="block text-sm font-medium text-gray-700">
                                C1
                            </label>
                            <input
                                type="text"
                                id="c1"
                                name="c1"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                placeholder="Masukkan c1"
                            >
                        </div>

                        <div class="mb-4">
                            <label for="c2" class="block text-sm font-medium text-gray-700">
                                C2
                            </label>
                            <input
                                type="text"
                                id="c2"
                                name="c2"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                placeholder="Masukkan c2"
                            >
                        </div>                    

                        <div class="mb-4">
                            <label for="c3" class="block text-sm font-medium text-gray-700">
                                C3
                            </label>
                            <input
                                type="text"
                                id="c3"
                                name="c3"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                placeholder="Masukkan c3"
                            >

                        </div>

                        <div class="mb-4">
                            <label for="c4" class="block text-sm font-medium text-gray-700">
                                C4
                            </label>
                            <input
                                type="text"
                                id="c4"
                                name="c4"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                placeholder="Masukkan c3"
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
