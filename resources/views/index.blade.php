@extends('layouts.main')

@section('content')

<div class= "container-lg" style="margin:0 auto;">

    <h1 class="text-center mt-3" style="font-family: 'Calibri'; color:#0da2ff; font-weight:bold">Crypto Dashboard</h1>

    <div class="row mt-5">

        @foreach($response as $currency)
        <div class="col-lg-4 col-mid-4 col-sm-12 text-center mb-3">
            <div class = "card" style = "width: 18rem;">
                <img src="{{$currency['logo_url']}}" style="width: 75px; margin:10px auto;">
                <div class="card-body">
                    <div class = "class-title">{{$currency['currency']}}</div>
                    <div class = "class-title" style="margin:5px;"> Name: {{$currency['name']}} </div>
                    <div class = "class-title" style="margin:5px;"> Price: &#8377;{{$currency['price']}} </div>
                    <div class = "class-title" style="margin:5px;"> Circulating Supply: {{$currency['circulating_supply']}} </div>
                    <div class = "class-title" style="margin:5px;"> Market Cap: {{$currency['market_cap']}} </div>
                    
                    @if($currency['7d']['price_change_pct']>0)
                    <div class="card-text" style="margin: 5px; color: green; font-weight: bold;">Change: {{$currency['7d']['price_change_pct']}}</div>

                    @else
                    <div class="card-text" style="margin: 5px; color: red; font-weight: bold;">Change: {{$currency['7d']['price_change_pct']}}</div>

                    @endif
                </div>
            </div>
        </div>
        @endforeach

    </div>


</div>

@endsection