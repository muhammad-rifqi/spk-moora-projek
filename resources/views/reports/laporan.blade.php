<!DOCTYPE html>
<html>
<head>
    <title>Laporan PIP</title>
    <style>
        body {
            font-family: sans-serif;
             font-size: 8px;
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
            <th align="left">Nama</th>
            <th align="left">C1</th>
            <th align="left">C2</th>
            <th align="left">C3</th>
            <th align="left">C4</th>
            <th align="left">C1</th>
            <th align="left">C2</th>
            <th align="left">C3</th>
            <th align="left">C4</th>
            <th align="left">C1</th>
            <th align="left">C2</th>
            <th align="left">C3</th>
            <th align="left">C4</th>
            <th align="left">JUMLAH</th>
        </tr>
    </thead>
    <tbody>
        @foreach($rows as $data)
        <tr>
            <td align="left">{{$data->alternative}}</td>
            <td align="left">{{$data->c1}}</td>
            <td align="left">{{$data->c2}}</td>
            <td align="left">{{$data->c3}}</td>
            <td align="left">{{$data->c4}}</td>
            <td align="left">{{$data->c11}}</td>
            <td align="left">{{$data->c22}}</td>
            <td align="left">{{$data->c33}}</td>
            <td align="left">{{$data->c44}}</td>
            <td align="left">{{$data->c111}}</td>
            <td align="left">{{$data->c222}}</td>
            <td align="left">{{$data->c333}}</td>
            <td align="left">{{$data->c444}}</td>
            <td align="left">{{$data->jumlah}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>