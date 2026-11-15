@php
    $nama = session('nama', '');
@endphp

<hr>
<header>
    <h1>Halaman {{ $slot }}</h1>

    <ul>
        <li><a href="/">Beranda</a></li>
        <li><a href="/jadwal">Jadwal Kuliah</a></li>
        @if ($nama)
            <li><a href="/dashboard">Dashboard</a></li>
        @else
            <li><a href="/login">Login</a></li>
        @endif
    </ul>

    @if ($nama)
        <h3>Login sebagai: {{ $nama }}</h3>
    @endif
</header>
<hr>
