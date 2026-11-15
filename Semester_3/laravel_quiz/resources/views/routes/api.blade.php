<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cell Store | API</title>
    @vite('resources/js/app.js')
</head>

<body>
    <x-navigasi />

    <div class="h-dvh w-full flex flex-col justify-center items-center">
        <h2 class="text-3xl font-bold">{{ $judul }}</h2>
        <p class="mt-4">{{ $isi }}</p>
    </div>
</body>

</html>
