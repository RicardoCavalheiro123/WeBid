<div id="aside">
    <div class="hi d-flex pt-4 pb-4">
        <div class="lg">
            <img src= "/alo.jpg" width="120" height="120">
        </div>
        <div class="nome ms-2 me-2">
            <p class = "fw-bold mb-1">Hi,</p>
            <p class = "fw-bold mb-0"> {{$user->firstname}} {{$user->lastname}} </p>
        </div>
    </div>
    <ul class = "ps-0 mt-2">
        <li>
            <a href = "{{route('profile',['id' => $user->idclient])}}"><button class = "fw-bold">
                    <i class="fa-solid fa-user"></i>
                    Account Overview
                </button> </a>
        </li>
        <li>
            <a href="{{route('details',['id' => $user->idclient])}}"><button class = "fw-bold">
                    <i class="fa-solid fa-address-card"></i>
                    My Details
                </button>
            </a>
        </li>
        <li>
            <a href="{{route('balance',['id' => $user->idclient])}}"><button class = "fw-bold">
                    <i class="fa-solid fa-wallet"></i>
                    My Wallet
                </button>
            </a>
        </li>
        <li>
            <a href=""><button class = "fw-bold">
                    <i class="fa-solid fa-coins"></i>
                    My Bids</button>
            </a>
        </li>
        <li>
            <a href="{{route('myauctions',['id' => $user->idclient])}}"><button class = "fw-bold">
                    <i class="fa-solid fa-house-user"></i>
                    My Auctions</button>
            </a>
        </li>
        <li>
            <a href=""><button class = "fw-bold">
                    <i class="fa-solid fa-star"></i>
                    Favourites</button>
            </a>
        </li>
        <li>
            <a href=""><button class = "fw-bold">
                    <i class="fa-solid fa-question"></i>
                    Support</button>
            </a>
        </li>
        <li>
            <a href=""><button class = "fw-bold">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Logout</button>
            </a>
        </li>
    </ul>
</div>
