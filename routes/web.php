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


// Route::get('/test', function () {
//     $response =http::get('https://newsapi.org/v2/everything?apiKey=3594fda4535547cd8bfb81c7ff0ebb30&q=health&language=id');
//     dd($response->json());
// });
Route::get('/artikel', function () {
    $blog_artikel = [
        [
            "tittle"=> "judul artikel pertama",
            "img" => "../asset/img/artikel (1).png",
            "author" => "orang pertama",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit rerum beatae rem vitae iusto laudantium quibusdam laboriosam minima at, perspiciatis fugit, magnam sapiente, placeat tenetur. Sit itaque deserunt, corporis cum officia fuga odio non iure nisi iste modi obcaecati fugiat eos, rerum recusandae at facere doloremque. Expedita, similique voluptatibus. Aperiam?",
            "date_of_issue"=>"2023"
        ],
        [
            "tittle"=> "judul artikel kedua",
            "img" => "../asset/img/artikel (1).png",
            "author" => "orang kedua",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit rerum beatae rem vitae iusto laudantium quibusdam laboriosam minima at, perspiciatis fugit, magnam sapiente, placeat tenetur. Sit itaque deserunt, corporis cum officia fuga odio non iure nisi iste modi obcaecati fugiat eos, rerum recusandae at facere doloremque. Expedita, similique voluptatibus. Aperiam?",
            "date_of_issue"=>"2023"
        ],
    ];
    $response =http::get('https://newsapi.org/v2/everything?apiKey=3594fda4535547cd8bfb81c7ff0ebb30&q=health&language=id');
    
    return view('./pages/artikel',[
        "tittle"=>"ARTIKEL",
        "artikel"=> $blog_artikel
        // "artikel"=> $response->json()

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
