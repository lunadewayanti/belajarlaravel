<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SapaController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about', [
        'nama'=> 'Ni Made Luna Dewayanti',
        'kelas'=> 'D4SM 48-03',
        'nim' => '707082430008',
    ]);
});

Route::view('/contact', 'pages.contact');

Route::get('/latihan', function () {
    $matakuliah = [
        'Pemrograman Web',
        'Basis Data',
        'UI/UX'
    ];
    return view('pages.latihan', [
        'matakuliah' => $matakuliah
        ]);
});

Route::get('/sapa', [SapaController::class, 'index']);

Route::get('/product', [ProductController::class, 'index']); //untuk menampilkan data 
Route::get('/product/addProduct', [ProductController::class, 'addProduct']);

Route::post('/product', [ProductController::class, 'store']);