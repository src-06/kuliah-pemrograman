<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/js/app.js')
</head>

<body>
    <form class="p-2" method="POST" action="/simpan">
        @csrf

        <input class="border-2 border-solid border-black rounded-md p-1 caret-pink focus:outline-3 outline-amber"
            type="text" name="nama">

        <button class="rounded-md ml-3 bg-stone-300 hover:bg-stone-400 px-4 py-1 border-2 border-black"
            type="submit">Simpan</button>
    </form>
</body>

</html>
