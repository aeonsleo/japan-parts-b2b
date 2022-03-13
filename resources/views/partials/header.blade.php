<header id="header" class="header_area big_section_cmn">
    <!-- bootstrap 5 menu  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light custom_menu_area">
        <div class="container-fluid">
            <!-- <div class="header_main_area_start"> -->
            <a class="navbar-brand" href="#">
                <div class="logo"><img src="{{ asset('frontend/img/logo.png') }}" alt=""></div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto  mb-2 mb-lg-0 custom_menu">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Car Parts</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Brands</a>
                    </li>
                </ul>
                <!-- mobile menu  -->
                <ul class="navbar-nav ml-auto  mb-2 mb-lg-0 custom_menu custom_menu_mobile">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Car Parts</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Brands</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Why JP Professionals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    @if (Auth::user() && Auth::user()->id)
                    {{ Auth::user()->name}}    
                    <a class="nav-link" href="#">Logout</a>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/login') }}">Login / Register</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-heart"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                    </li>
                </ul>
                <!-- end mobile menu  -->
                <form class="d-flex menu_search">
                    <input class=" " type="search" placeholder="Search by car brand, part number, product type"
                        aria-label="Search">
                    <button class="btn_c" type="submit"><i class="fas fa-search"></i></button>
                </form>
                <ul class="navbar-nav ml-auto  mb-2 mb-lg-0 custom_menu">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Why JP Professionals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>

                    @if (Auth::user() && Auth::user()->id)
                    {{ Auth::user()->name}}
                    <form action="{{ url('/logout') }}" method="POST">
                        @csrf
                        <input type="submit" class="nav-link" value="Logout" />
                    </form>    
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/login') }}">Login / Register</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-heart"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                    </li>
                </ul>
            </div>
            <!-- </div> -->
        </div>
    </nav>
    <!-- bootstrap 5 menu  -->
</header>