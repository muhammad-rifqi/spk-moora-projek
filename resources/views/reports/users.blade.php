<!DOCTYPE html>
<html>
<head>
    <title>Laporan User</title>
    <style>
        body {
            font-family: sans-serif;
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

<h2>Laporan Data User</h2>

<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user['name'] }}</td>
            <td>{{ $user['email'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>