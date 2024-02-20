<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// BASIC ROUTING
// Langkah b
Route::get('/hello', function () { 
    return 'Hello World';
});

// Langkah d
Route::get('/world', function () { 
    return 'World';
});

//Langkah f
Route::get('/', function () { 
    return 'Selamat Datang';
});

//Langkah g
Route::get('/about', function () { 
    return '2241720020';
});


//ROUTE PARAMETERS
//Langkah a
Route::get('/user/{name}', function ($name) { 
    return 'Nama saya '.$name;
});

//Langkah d
Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});
    
//Langkah f
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});


//OPTIONAL PARAMETERS
//Langkah a
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

//Langkah d
Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name;
});


//ROUTE NAME
//Langkah a
Route::get('/user/profile', function() {
    //
})->name('profile');

