<html>
</head>
<body bgcolor='red'>
<center>
<h2>Daftar Lagu</h2>
<table border='1'>
<tr>
    <th>No</th><th>lagu</th><th>album</th><th>pencipta</th><th>tahun</th>
</tr>
@foreach ($laguu as $data)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $data->judul }}</td>
        <td>{{ $data->album }}</td>
        <td>{{ $data->pencipta }}</td>
        <td>{{ $data->tahun }}</td>
    </tr>
@endforeach
</table>
</center>
</body>
</html>
