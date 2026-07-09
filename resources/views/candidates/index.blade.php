<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Siswa') }}
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
                        <a href="/candidates/add"
                        class="bg-blue-500 hover:bg-blue-100 text-white font-bold py-2 px-4 rounded" style="background-color: blue">
                            + Tambah Siswa
                        </a>
                    </div>
                   <table id="datasiswa" class="display" style="font-size: 12px;">
                        <thead>
                            <tr>
                                <th>Nis</th>
                                <th>Nama</th>
                                <th>JK</th>
                                <th>TTL</th>
                                <th>Penghasilan Ayah</th>
                                <th>Penghasilan Ibu</th>
                                <th>Jumlah Sodara</th>
                                <th>Prestasi</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siswa as $data)
                            <tr>
                                <td>{{$data->nis_nim}}</td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->jenis_kelamin}}</td>
                                <td>{{$data->tempat_lahir}},{{$data->tanggal_lahir}}</td>
                                <td>{{$data->penghasilan_ayah}}</td>
                                <td>{{$data->penghasilan_ibu}}</td>
                                <td>{{$data->jumlah_saudara}}</td>
                                <td>{{$data->prestasi}}</td>
                                <td><a href="/candidates/edit/{{$data->id}}" class="text-white py-1 px-3 rounded" style="background-color:orange">Edit</a>  
                                <a href="/candidates/delete/{{$data->id}}" class="bg-red-500 hover:bg-red-700 text-white py-1 px-3 rounded" onclick="return confirm('Apakah Kamu Yakin ?')">Hapus</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nis</th>
                                <th>Nama</th>
                                <th>Penghasilan Ayah</th>
                                <th>Penghasilan Ibu</th>
                                <th>Jumlah Sodara</th>
                                <th>Prestasi</th>
                                <th>#</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
