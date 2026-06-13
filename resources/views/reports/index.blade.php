<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reports') }}
        </h2>
    </x-slot>

     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-4">
                        <a href="/report/pdf"
                        class="bg-blue-500 hover:bg-blue-100 text-white font-bold py-2 px-4 rounded" style="background-color: blue">
                            Cetak Laporan
                        </a>
                    </div>
                   <table class="display p-3" width="100%" border="1" cellpadding="10" cellspacing="0">
                        <thead>
                            <tr style="border-bottom: 1px solid #000;">
                                <th align="left">ID</th>
                                <th align="left">Nama</th>
                                <th align="left">C1</th>
                                <th align="left">C2</th>
                                <th align="left">C3</th>
                                <th align="left">C4</th>
                                <th align="left">NILAI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($laporan as $data)
                            <tr>
                                <td align="left">{{$no}}</td>
                                <td align="left">{{$data->alternative}}</td>
                                <td align="left">{{$data->c1}}</td>
                                <td align="left">{{$data->c2}}</td>
                                <td align="left">{{$data->c3}}</td>
                                <td align="left">{{$data->c4}}</td>
                                <td align="left">{{$data->jumlah}}</td>
                            </tr>
                            <?php $no++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
