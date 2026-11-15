<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <x-navigasi>Login</x-navigasi>

    <form method="POST" action="/cek_login">
        @csrf

        @error('nama')
            <p style="color: red;">Nama minimal 3 karakter</p>
        @enderror

        @error('pass')
            <p style="color: red;">Password minimal 6 karakter</p>
        @enderror

        <label for="nama">Nama:</label>
        <input type="text" name="nama">

        <br>

        <label for="pass">Password:</label>
        <input type="text" name="pass">

        <br>

        <button type="submit">Login</button>
    </form>
</body>

</html>
