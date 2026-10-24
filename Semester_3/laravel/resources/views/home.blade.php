<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Beranda</title>
</head>

<body>
    <x-header />

    <h3>Masukan data dibawah untuk ke profil</h3>
    <form method="POST" action="/profil">
        @csrf

        <label for="nama">Nama:</label>
        <input type="text" name="nama">

        <br />
        <label for="pass">Password:</label>
        <input type="text" name="pass">

        <br />
        <button type="submit">Kirim</button>

        @error('nama')
            <p>Nama harus sesuai ketentuan ini: {{ $message }}</p>
        @enderror

        @error('pass')
            <p>Password harus sesuai ketentuan ini: {{ $message }}</p>
        @enderror
    </form>
</body>

</html>
