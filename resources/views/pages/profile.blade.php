<!DOCTYPE html>
<html lang=''>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Page Title</title>
    <link rel='stylesheet' href='main.css'>
</head>
<body>
    <nav>
        <a href="/">Beranda</a>
    </nav>
    <h1>Profile</h1>
    <p> nama : {{ $nama }}</p>
    <p> nim : {{ $nim }}</p>
    <p> kelas : {{ $kelas }}</p>
    <p> status : {{ $status }}</p>

    @if ($status === 'aktif')
        <p>mahasiswa aktif</p>
    @else
        <p>mahaisiswa tidak aktif</p>
    @endif
</body>
</html>