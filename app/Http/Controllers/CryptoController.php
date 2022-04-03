<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CryptoController extends Controller
{
    public function getData(Request $request){
        $response = Http::get("https://api.nomics.com/v1/currencies/ticker?key=e1a98f77ec8fe3561b3c285330995bacee76a211&per-page=100&page=1&convert=INR");
        return view('index',['response'=> $response->json()]);
    }

    public function about(Request $request){
        return view('about'); 
    }

    //"https://api.nomics.com/v1/currencies/ticker?key=e1a98f77ec8fe3561b3c285330995bacee76a211&ids=BTC,ETH,XRP&interval=1d,30d&convert=EUR&platform-currency=ETH&per-page=100&page=1"
}
