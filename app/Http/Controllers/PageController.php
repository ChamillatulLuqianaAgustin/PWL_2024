<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Resource ‘/’
    // public function index() {
    //     return 'Selamat Datang';
    // }

    // Resource ‘/about’
    // public function about() {
    //     return 'Nama: Chamillatul Luqiana Agustin' . "<br>" . 'NIM: 2241720020';
    // }

    // Resource '/articles/{id}'
    public function articles($id) {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}
