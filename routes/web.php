<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;


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


//CONTROLLER
//Membuat Controller
//Langkah d
Route::get('/hello', [WelcomeController::class,'hello']);

//Langkah f Resource '/' 
Route::get('/', [PageController::class,'index']);

// Langkah f Resource '/about'
Route::get('/about', [PageController::class,'about']);

// Langkah f Resource '/articles'
Route::get('/articles', [PageController::class,'articles']);

// Langkah g Resource '/'
Route::get('/', [HomeController::class,'index']);

// Langkah g Resource '/about'
Route::get('/about', [AboutController::class,'about']);

// Langkah g Resource '/articles'
Route::get('/articles', [ArticleController::class,'articles']);

// RESOURCE CONTROLLER
// Langkah b
use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);

// Langkah d
Route::resource('photos', PhotoController::class)->only(['index', 'show']);
Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);