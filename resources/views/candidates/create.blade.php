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
                    
                 <h2 class="text-2xl font-bold mb-6">Form Data Siswa</h2>
                    <form action="/candidates/store" method="POST">
                        @csrf
                        <!-- Nama -->
                        <div class="mb-4">
                            <label for="nis_nim" class="block text-sm font-medium text-gray-700">
                                NIS
                            </label>
                            <input
                                type="text"
                                id="nis_nim"
                                name="nis_nim"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                placeholder="Masukkan nis" required
                            >
                        </div>

                        <div class="mb-4">
                            <label for="nama" class="block text-sm font-medium text-gray-700">
                                NIS
                            </label>
                            <input
                                type="text"
                                id="nama"
                                name="nama"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                placeholder="Masukkan Nama" required
                            >
                        </div>

                        <!-- Email -->
                        <div class="mb-4">
                            <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">
                                Jenis Kelamin
                            </label>
                            <input
                                type="radio"
                                id="jenis_kelamin"
                                name="jenis_kelamin" value="L" checked> Laki Laki
                            <input
                                type="radio"
                                id="jenis_kelamin"
                                name="jenis_kelamin" value="P"> Perempuan
                        </div>

                        <!-- Telepon -->
                        <div class="mb-4">
                            <label for="tempat_lahir" class="block text-sm font-medium text-gray-700">
                                Tempat Lahir
                            </label>
                            <input
                                type="text"
                                id="tempat_lahir"
                                name="tempat_lahir"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                placeholder="Masukkan Tempat Lahir" required
                            >
                        </div>

                        <div class="mb-4">
                            <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">
                                Tanggal Lahir
                            </label>
                            <input
                                type="date"
                                id="tanggal_lahir"
                                name="tanggal_lahir"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                placeholder="Masukkan Tanggal Lahir" required
                            >
                        </div>

                        <!-- Alamat -->
                        <div class="mb-4">
                            <label for="address" class="block text-sm font-medium text-gray-700">
                                Alamat
                            </label>
                            <textarea
                                id="address"
                                name="address"
                                rows="4"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                placeholder="Masukkan alamat"
                            ></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="prestasi" class="block text-sm font-medium text-gray-700">
                                Prestasi
                            </label>
                            <input
                                type="text"
                                id="prestasi"
                                name="prestasi"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                placeholder="Masukkan Prestasi" required
                            >
                        </div>

                        <div class="mb-4">
                            <label for="penghasilan_ayah" class="block text-sm font-medium text-gray-700">
                                Penghasilan Ayah
                            </label>
                            <input
                                type="number"
                                id="penghasilan_ayah"
                                name="penghasilan_ayah"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                placeholder="Masukkan Penghasilan Ayah" required
                            >
                        </div>

                        <div class="mb-4">
                            <label for="penghasilan_ibu" class="block text-sm font-medium text-gray-700">
                                Penghasilan Ibu
                            </label>
                            <input
                                type="number"
                                id="penghasilan_ibu"
                                name="penghasilan_ibu"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                placeholder="Masukkan Penghasilan Ibu" required
                            >
                        </div>

                        <div class="mb-4">
                            <label for="jumlah_saudara" class="block text-sm font-medium text-gray-700">
                                Jumlah Saudara
                            </label>
                            <input
                                type="number"
                                id="jumlah_saudara"
                                name="jumlah_saudara"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                placeholder="Masukkan Jumlah Saudara" required
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
