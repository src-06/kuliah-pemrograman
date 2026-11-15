<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cell Store | Profil</title>
    @vite('resources/js/app.js')
</head>

<body>
    <x-navigasi />

    <div class="flex justify-center items-center w-full h-dvh">
        <div class="px-4 py-6 bg-stone-700 rounded-md">
            <h2 class="text-lg text-white font-bold">Profil:</h2>
            <ul class="px-4 [&>li]:text-white">
                <li><span class="font-bold">Nama:</span> {{ $nama }}</li>
                <li><span class="font-bold">Jabatan:</span> {{ $jabatan }}</li>
            </ul>
        </div>
    </div>
</body>

</html>
