<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PIP') }}
        </h2>
    </x-slot>

     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <table id="datasiswa" class="display">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>C1</th>
                                <th>C2</th>
                                <th>C3</th>
                                <th>C4</th>
                                <th>NILAI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($pip as $data)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$data->alternative}}</td>
                                <td>{{$data->c1}}</td>
                                <td>{{$data->c2}}</td>
                                <td>{{$data->c3}}</td>
                                <td>{{$data->c4}}</td>
                                <td>{{$data->jumlah}}</td>
                            </tr>
                            <?php $no++; ?>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>C1</th>
                                <th>C2</th>
                                <th>C3</th>
                                <th>C4</th>
                                <th>NILAI</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
