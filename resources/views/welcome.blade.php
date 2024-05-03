<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Barang UTS</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="container text-center my-5">
        <h1 class="mb-4">Master Barang UTS</h1>
        {{-- Contoh cara mereferensikan gambar di dalam file blade dengan menggunakan pendekatan Vite --}}
        <img class="img-thumbnail" src="{{ Vite::asset('resources/images/laravel.png') }}" alt="image">
        <h2>Nama    : Arya Maulana Latanzana</h2>
        <h2>NIM     : 1204220113</h2>
        <h2>Kelas   : IS 05-03</h2>
        <div class="col-md-2 offset-md-5 mt-4">
            <div class="d-grid gap-2">
                <a class="btn btn-dark" href="{{ route('home') }}" class="nav-link">Home</a>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
