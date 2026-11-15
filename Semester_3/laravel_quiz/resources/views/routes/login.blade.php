<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cell Store | Login</title>
    @vite('resources/js/app.js')
</head>

<body>
    <x-navigasi />

    <form method="POST" action="/simpan" class="w-full h-dvh flex justify-center items-center">
        @csrf

        <div class="px-6 py-8 flex flex-col bg-stone-700 rounded-md shadow">
            @error('nama')
                <p class="text-red">Nama minimal harus 3 huruf</p>
            @enderror

            <div>
                <label class="text-white" for="nama">Nama:</label>
                <input class="px-1 text-white outline outline-white rounded-md" type="text" name="nama">
            </div>

            <button class="px-2 py-1 my-4 bg-stone-200 hover:bg-stone-400" type="submit">Login</button>
        </div>
    </form>
</body>

</html>
