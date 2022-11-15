<div class="cont">
    <header>
        <a href="{{route('/')}}" id = "logo"> WeBid</a>
        <div class="search">
            <div class = "sbar">
                <form action="search" method="get">
                    <input type="text" id="searchbar" name="search_query" placeholder="Search anything...">
                    <i class="fa fa-search"></i>
                </form>
            </div>
        </div>
        <div class="auth">
            <a class = "log" href = "{{route('login')}}">
                <button>
                    <i class="fa-solid fa-user"></i>
                    <span>Login</span>
                </button>
            </a>
            <a href ="{{route('register')}}" class = "reg" >
                <button>
                    <i class="fa-solid fa-user-plus"></i>
                    <span> Register </span>
                </button>
            </a>
        </div>
    </header>
</div>
