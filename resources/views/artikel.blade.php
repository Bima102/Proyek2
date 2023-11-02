<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border='1'>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Isi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($artikel as $d)
            <tr>
                <td>{{ $d['Judul'] }}</td>
                <td>{{ $d['Isi'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
