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
                   <table class="display p-3" width="100%" border="1" cellpadding="10" cellspacing="0" style="font-size: 12px;">
                        <thead>
                            <tr style="border-bottom: 1px solid #000;">
                                    <th align="left">No</th>
                                    <th align="left">NIS</th>
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
                            <?php //$expw = explode("-",$data->alternative); ?>
                            <tr>
                                <th align="left">{{$no}}</th>
                                <td align="left">{{$data->nis_nim}}</td>
                                <td align="left">{{$data->nama}}</td>
                                <td align="left">{{$data->bobot1}}</td>
                                <td align="left">{{$data->bobot2}}</td>
                                <td align="left">{{$data->bobot3}}</td>
                                <td align="left">{{$data->bobot4}}</td>
                                <td align="left">{{floor($data->bobot1 + $data->bobot2 + $data->bobot3 + $data->bobot4)}}</td>
                            </tr>
                            <?php $no++; ?>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th align="left">No</th>
                                <th align="left">NIS</th>
                                <th align="left">Nama</th>
                                <th align="left">C1</th>
                                <th align="left">C2</th>
                                <th align="left">C3</th>
                                <th align="left">C4</th>
                                <th align="left">NILAI</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
