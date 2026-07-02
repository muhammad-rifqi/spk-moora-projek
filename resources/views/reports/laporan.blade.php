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
            <th align="left">Kriteria 1</th>
            <th align="left">Kriteria 2</th>
            <th align="left">Kriteria3</th>
            <th align="left">Kriteria 4</th>
            <th align="left">NILAI</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        @foreach($rows as $data)
        <?php $exp = explode("-",$data->alternative); ?>
        <tr>
            <th align="left">{{$no}}</th>
            <td align="left">{{$exp[0]}}</td>
            <td align="left">{{$exp[1]}}</td>
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

</body>
</html>