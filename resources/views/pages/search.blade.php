@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div id = "auction" class="d-flex flex-row flex-wrap justify-content-center ">
            @foreach($auctions as $auct)
                <div class="d-flex flex-column ps-3 pe-3 pt-3 ">
                    <div class = "item">
                        <img src= "alo.jpg" width="287" height="190">
                        <div class = "prop" >
                            <p id = "price" class = "fw-bold mb-0 mt-1"> {{$auct->currentprice}}€ </p>
                            <p id = "nome" class = "fw-bold mb-5"> {{$auct->name}} </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
