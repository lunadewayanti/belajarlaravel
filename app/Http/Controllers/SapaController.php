<?php

namespace App\Http\Controllers;

class SapaController extends Controller
{
    public function index()
    {
        $nama = 'Luna Dewayanti';

        return view('pages.sapa', [
            'nama' => $nama,
        ]);
    }
}

