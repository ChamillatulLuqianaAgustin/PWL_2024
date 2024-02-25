<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
    }
    
    //Menampilkan View dari Controller
    //Langkah a
    public function greeting(){
        return view('blog.hello', ['name' => 'Chamillatul'])
        //Meneruskan data ke view
        //Langkah a
        ->with('name','Chamillatul')
        ->with('occupation','Astronaut');
    }
}
