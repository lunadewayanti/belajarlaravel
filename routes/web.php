<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('pages.beranda');
});

Route::get('/profile', function () {
    return view ('pages.profile', [
        'nama' => 'una',
        'nim' => '12312331231233',
        'kelas' => 'D4SM 48-03',
        'status' => 'aktif'
    ]);
});
