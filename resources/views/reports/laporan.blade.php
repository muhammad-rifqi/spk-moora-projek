<!DOCTYPE html>
<html>
<head>
    <title>Laporan PIP</title>
    <style>
        body {
            font-family: sans-serif;
             font-size: 12px;
        }

        table {
            width:100%;
            border-collapse: collapse;
        }

        th, td {
            border:1px solid #000;
            padding:8px;
        }
    </style>
</head>
<body>

<h2>Laporan Data PIP</h2>

<table width="100%">
    <thead>
        <tr>
            <th align="left">No</th>
            <th align="left">NIS</th>
            <th align="left">Nama</th>
            <th align="left">Prestasi</th>
            <th align="left">Penghasilan Ayah</th>
            <th align="left">Penghasilan Ibu</th>
            <th align="left">Jumlah Saudara 4</th>
            <th align="left">NILAI</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        @foreach($rows as $data)
        <?php //$exp = explode("-",$data->alternative); ?>
        <tr>
            <th align="left">{{$no}}</th>
            <td align="left">{{$data->nis_nim}}</td>
            <td align="left">{{$data->nama}}</td>
            <td align="left">{{$data->bobot1}}</td>
            <td align="left">{{$data->bobot2}}</td>
            <td align="left">{{$data->bobot3}}</td>
            <td align="left">{{$data->bobot4}}</td>
            <td align="left">{{$data->nilai}}</td>
        </tr>
        <?php $no++; ?>
        @endforeach
    </tbody>
</table>

</body>
</html>