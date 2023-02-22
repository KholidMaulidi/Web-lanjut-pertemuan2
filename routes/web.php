<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Praktikum1
// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// Route::get('/about', function(){
//     echo "Kholid Maulidi (2141720139)";
// });

// Route::get('/articles/{id}', function($id){
//     return "Halaman Artikel dengan ID ".$id;
// });

//Praktikum2
// Route::get('/index', [PageController::class,'index']);

// Route::get('/about', [PageController::class,'about']);

// Route::get('/articles/{id}', [PageController::class,'articles']);

//Praktikum3
Route::get('/', function(){
    return 'Ini halaman utama';
});

Route::prefix('category')->group(function () {
    Route::get('/games', [PageController::class, 'eduGames']);
    Route::get('/kidsGames', [PageController::class, 'eduKidsGames']);
    Route::get('/books', [PageController::class, 'eduBooks']);
});

Route::get('/news/{name?}', function ($name = null){
    return 'Anda berada pada berita '.$name;
});

Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        echo "Halaman program karir";
    });
    Route::get('/magang', function () {
        echo "Halaman program magang";
    });
    Route::get('/kunIndustri', function () {
        echo "Halaman program Kunjungan Industri";
    });
});

Route::get('/aboutUs', function () {
    echo "About Us";
});

Route::resource('contactUs', ContactController::class)->only(['show']);