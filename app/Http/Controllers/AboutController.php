<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        return 'Nama: Chamillatul Luqiana Agustin' . "<br>" . 'NIM: 2241720020';
    }
}
