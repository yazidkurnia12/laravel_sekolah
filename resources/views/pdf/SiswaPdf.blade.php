<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Siswa</title>
</head>
<body>
    <h1>Data Siswa</h1>

    <table border="2">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama Lengkap</td>
                <td>Jenis Kelamin</td>
                <td>Agama</td>
                <td>Rata-Rata Nilai</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $s)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $s->nama_lengkap() }}</td>
                <td>{{ $s->jenis_kelamin }}</td>
                <td>{{ $s->agama }}</td>
                <td>{{ $s->RataRataNilai() }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>