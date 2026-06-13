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
                   <table id="datasiswa" class="display">
                        <thead>
                            <tr>
                                <th>Nis</th>
                                <th>Nama</th>
                                <th>JK</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Penghasilan Ayah</th>
                                <th>Penghasilan Ibu</th>
                                <th>Jumlah Sodara</th>
                                <th>Prestasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siswa as $data)
                            <tr>
                                <td>{{$data->nis_nim}}</td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->jenis_kelamin}}</td>
                                <td>{{$data->tempat_lahir}}</td>
                                <td>{{$data->tanggal_lahir}}</td>
                                <td>{{$data->alamat}}</td>
                                <td>{{$data->penghasilan_ayah}}</td>
                                <td>{{$data->penghasilan_ibu}}</td>
                                <td>{{$data->jumlah_saudara}}</td>
                                <td>{{$data->prestasi}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nis</th>
                                <th>Nama</th>
                                <th>JK</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Penghasilan Ayah</th>
                                <th>Penghasilan Ibu</th>
                                <th>Jumlah Sodara</th>
                                <th>Prestasi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
