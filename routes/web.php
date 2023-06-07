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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('./pages/home', [
        "tittle"=>"HOME"
    ]);
});
Route::get('/artikel', function () {
    return view('./pages/artikel',[
        "tittle"=>"ARTIKE"
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
