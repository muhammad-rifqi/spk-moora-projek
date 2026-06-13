<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kriteria') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(session('status'))
                        <div class="border border-green-400 text-green-700 px-4 py-3 rounded mb-4" style="background-color:green; color: white">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="mb-4">
                        <a href="/criteria/add"
                        class="bg-blue-500 hover:bg-blue-100 text-white font-bold py-2 px-4 rounded" style="background-color: blue">
                            + Tambah Kriteria
                        </a>
                    </div>
                   <table id="datasiswa" class="display">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kode</th>
                                <th>Nama Kriteria</th>
                                <th>Tipe</th>
                                <th>Bobot</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($criteria as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->kode}}</td>
                                <td>{{$data->nama_kriteria}}</td>
                                <td>{{$data->tipe}}</td>
                                <td>{{$data->bobot}}</td>
                                <td><a href="/criteria/edit/{{$data->id}}" class="text-white py-1 px-3 rounded" style="background-color:orange">Edit</a>  
                                <a href="/criteria/delete/{{$data->id}}" class="bg-red-500 hover:bg-red-700 text-white py-1 px-3 rounded" onclick="return confirm('Apakah Kamu Yakin ?')">Hapus</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Kode</th>
                                <th>Nama Kriteria	</th>
                                <th>Tipe</th>
                                <th>Bobot</th>
                                <th>#</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <table class="display" width="100%" border=1>
                        <thead>
                            <tr>
                                <th align="left">Jenis Kriteria</th>
                                <th align="left">Nama Kriteria</th>
                                <th align="left">Kode</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="left">Terbaik (Best)</td>
                                <td align="left">Penghasilan Ayah</td>
                                <td align="left">C1</td>
                            </tr>
                            <tr>
                                <td align="left">Terburuk (Worst)</td>
                                <td align="left">Jumlah Saudara</td>
                                <td align="left">C3</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
