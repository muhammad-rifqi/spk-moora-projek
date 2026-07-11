<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Information') }}
        </h2>
    </x-slot>

     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-4">
                        Informasi
                    </div>
                   <table class="display p-3" width="100%" border="1" cellpadding="10" cellspacing="0" style="font-size: 12px;">
                        <thead>
                            <tr style="border-bottom: 1px solid #000;">
                                <th align="left">ID APP</th>
                                <th align="left">Nama</th>
                                <th align="left">NIS</th>
                                <th align="left">NILAI</th>
                                <th align="left">Ranking</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($data as $rows)
                            <?php //$exp = explode("-",$rows->alternative); ?>
                            <tr>
                                <td align="left">#{{$rows->id}}</td>
                                <td align="left">{{$rows->nis_nim}}</td>
                                <td align="left">{{$rows->nama}}</td>
                                <td align="left">{{($rows->bobot1 * 0.45) + ($rows->bobot2 * 0.25) + ($rows->bobot3 * 0.10) + ($rows->bobot4 * 0.20)}}</td>
                                <td align="left">{{$no}}</td>
                            </tr>
                            <?php $no++; ?>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th align="left">ID APP</th>
                                <th align="left">Nama</th>
                                <th align="left">NIS</th>
                                <th align="left">NILAI</th>
                                <th align="left">Ranking</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
