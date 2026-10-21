<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1 class="text-2xl font-bold">Profil Mahasiswa</h1>

    <p>Nama: {{ $nama }}</p>
    <p>NIM: {{ $nim }}</p>
    <p>Program Studi: {{ $prodi }}</p>
</body>

</html>
