<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('./pages/home', [
        "tittle"=>"HOME"
    ]);
});

Route::get('/artikel', function () {
    $response = Http::get('https://newsapi.org/v2/everything',[
            'apiKey' => '3594fda4535547cd8bfb81c7ff0ebb30',
            'q'=>'health',
            'language'=> 'id',
            
    ]);
    $data= $response->json();
    $artikel= $data['articles'];
    return view('./pages/artikel',[
        "tittle"=>"ARTIKEL",
        "artikel"=> $artikel
    ]);
});

Route::get('/pageLansia', function () {
    return view('./pages/pageLansia',[
        "tittle"=>"TES KESEHATAN LANSIA"
    ]);
});
Route::get('/pageMental', function () {
    return view('./pages/pageMental',[
        "tittle"=>"TES KESEHATAN MENTAL"
    ]);
});
Route::get('/pageBMI', function () {
    return view('./pages/pageBMI',[
        "tittle"=>"TES BERAT BADAN"
    ]);
});
Route::get('/cariDokter', function () {
    return view('./pages/cariDokter',[
        "tittle"=>"CARI DOKTER"
    ]);
});
Route::get('/aboutMe', function () {
    return view('./pages/aboutMe',[
        "tittle"=>"ABOUT ME"
    ]);
});
Route::get('/login', function () {
    return view('./pages/login',[
        "tittle"=>"HALAMAN LOGIN"
    ]);
});
