<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiwa</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Program Studi</th>
        </tr>

        @foreach ($mahasiswa as $mhs)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->prodi }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
