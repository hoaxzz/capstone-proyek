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
    return view('home');
});
Route::get('/artikel', function () {
    return view('artikel');
});
Route::get('/pageLansia', function () {
    return view('pageLansia');
});
Route::get('/pageMental', function () {
    return view('pageMental');
});
Route::get('/pageBMI', function () {
    return view('pageBMI');
});
Route::get('/cariDokter', function () {
    return view('cariDokter');
});
Route::get('/aboutMe', function () {
    return view('aboutMe');
});
