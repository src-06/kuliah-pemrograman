@php
    $nama = session('nama');
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal</title>
    <style>
        td {
            padding-inline: 8px;
        }
    </style>
</head>

<body>
    <x-navigasi>Jadwal</x-navigasi>

    @if ($nama)
        <table border="1">
            <tr>
                <th>Matakuliah</th>
                <th>Jadwal</th>
            </tr>
            <tr>
                <td>Pemrogaman Web 1</td>
                <td>Jum'at, 13 November 2026</td>
            </tr>
            <tr>
                <td>Statistika & Probabilitas</td>
                <td>Jum'at, 13 November 2026</td>
            </tr>
            <tr>
                <td>Basis Data Lanjutan</td>
                <td>Sabtu, 14 November 2026</td>
            </tr>
        </table>
    @else
        <h3>Oops... kamu tidak memiliki akses untuk melihat jadwal</h3>
    @endif
</body>

</html>
