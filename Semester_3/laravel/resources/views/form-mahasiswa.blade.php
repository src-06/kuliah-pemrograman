<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
</head>

<body>
    <h1>Form Data Mahasiswa</h1>

    <form method="POST" action="/simpan-mahasiswa">
        @csrf

        <label for="nama">Nama Mahasiswa:</label>
        <input type="text" name="nama">
        <button type="submit">Kirim</button>

        @error('nama')
            <p>{{ $message }}</p>
        @enderror
    </form>
</body>

</html>
