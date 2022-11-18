@extends('layouts.app')

@section('content')
    <link href="{{asset('css/admin.css')}}" rel="stylesheet">
    <div class = "cover out1">
        <div class="prof d-flex">
            <div id="side">
                <div class="hi d-flex pt-4 pb-4">
                    <div class="lg">
                        <img src= "/alo.jpg" width="120" height="120">
                    </div>
                    <div class="nome ms-2 me-2">
                        <p class = "fw-bold mb-1">Hi,</p>
                        <p class = "fw-bold mb-0"> Admin</p>
                    </div>
                </div>
                <ul class = "ps-0 mt-2">
                    <li>
                        <a href = "{{route('profile')}}"><button class = "fw-bold">
                                <i class="fa-solid fa-user"></i>
                                Dashboard
                            </button> </a>
                    </li>
                    <li>
                        <a href="{{route('details')}}"><button class = "fw-bold">
                                <i class="fa-solid fa-address-card"></i>
                                Costumers
                            </button>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('balance')}}"><button class = "fw-bold">
                                <i class="fa-solid fa-wallet"></i>
                                Auctions
                            </button>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('mybids')}}"><button class = "fw-bold">
                                <i class="fa-solid fa-coins"></i>
                                Bids</button>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('mybids')}}"><button class = "fw-bold">
                                <i class="fa-solid fa-coins"></i>
                                Reports</button>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}""><button class = "fw-bold">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                Logout</button>
                        </a>
                    </li>
                </ul>
            </div>            
            <div class = "outside">
                <div class="spec d-flex flex-column ps-3 pe-3">
                    <div class = "stuf mt-4 mb-4">
                        <p class ="h2 fw-bold mb-4"> Dashboard </p>
                        <div class = "rect">
                            <p class = "txtt"> You are in the admin panel, here you can administrate the website</p>
                        </div>
                        <div class = "d-flex mt-4 numbers">
                            <div class = "d-flex boxi">
                                <img src= "/alo.jpg" width="50" height="50">
                                <div class = "ms-2">
                                    <span class = "h5"> Total </span>
                                    <p class = "h5 mb-0"> Costumers </p>
                                    <p class = "h5 fw-bold mb-0"> 1000 </p>
                                </div>
                            </div>
                            <div class = "d-flex boxi ms-5">
                                <img src= "/alo.jpg" width="50" height="50">
                                <div class = "ms-2">
                                    <span class = "h5"> Total </span>
                                    <p class = "h5 mb-0"> Auctions </p>
                                    <p class = "h5 fw-bold mb-0"> 1000 </p>
                                </div>
                            </div>
                            <div class = "d-flex boxi ms-5">
                                <img src= "/alo.jpg" width="50" height="50">
                                <div class = "ms-2">
                                    <span class = "h5"> Total</span>
                                    <p class = "h5"> Bids </p>
                                    <p class = "h5 fw-bold mb-0"> 1000 </p>
                                </div>
                            </div>
                        </div>
                        <p class ="h3 fw-bold mt-4"> Latest Bids </p>
                        <table class="table oview mt-4">
                            <thead>
                              <tr>
                                <th scope="col">Costumer</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Auction</th>
                                <th scope="col">Date</th>
                              </tr>
                            </thead>
                            <tbody>
                                <div class = "d-flex align-items-center">
                              <tr>
                                <th class = "d-flex boxi2" scope="row">
                                    <img src= "/alo.jpg" width="40" height="40">
                                    <span class = "ms-2 fw-light"> André Garcia </span>
                                    <td class = "mt-3">10$</td>
                                    <td>Tennis</td>
                                    <td>2022/02/01</td>
                                </th>
                              </tr>
                            </div>
                              <tr>
                                <th class = "d-flex boxi2" scope="row">
                                    <img src= "/alo.jpg" width="40" height="40">
                                    <span class = "ms-2 fw-light"> André Garcia </span>
                                    <td class = "mt-3">10$</td>
                                    <td>Tennis</td>
                                    <td>2022/02/01</td>
                                </th>
                              </tr>
                              <tr>
                                <th class = "d-flex boxi2" scope="row">
                                    <img src= "/alo.jpg" width="40" height="40">
                                    <span class = "ms-2 fw-light"> André Garcia </span>
                                    <td class = "mt-3">10$</td>
                                    <td>Tennis</td>
                                    <td>2022/02/01</td>
                                </th>
                              </tr>
                            </tbody>
                          </table>
                          <div class = "smore">
                            <a href = "" class = "fw-bold h5"> View All </a>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
