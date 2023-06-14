<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    public function index(){
        $response = Http::get('hhttps://newsapi.org/v2/everything?apiKey=3594fda4535547cd8bfb81c7ff0ebb30&q=health&language=id');
        $data = $response->json();
        dd($data);

    }
}
