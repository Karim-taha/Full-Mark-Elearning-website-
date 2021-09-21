<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="{{ asset('style/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/home.css') }}" />
    <link href="{{ asset('fontawesome-free-5.15.1-web/css/all.css') }}" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    @yield('special-header')
</head>

<body>
    <!-- start of header -->
    <header class="container-fluid" id="site-main-header" style="z-index: 1000; position: sticky; top: 0">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark col-12">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{ asset('media/Logo_2.png') }}" alt="logo" style="height: 10vh" />
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>

                        {{-- <li class="nav-item dropdown">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle nav-link header-btn"
                                    style="background: none; border: none" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Browse our courses
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <a class="dropdown-item" href="{{url('/search-courses')}}">Primary School</a>
                                    <a class="dropdown-item" href="{{url('/search-courses')}}">Secondary School</a>
                                    <a class="dropdown-item" href="{{url('/search-courses')}}">High School</a>
                                </div>
                            </div>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('search.sale')}}">Offers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/about-us')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/contact-us')}}">Contact Us</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0 d-flex flex-nowrap" method="GET" action="{{ route('courses.search') }}">
                        <input class="form-control mr-sm-2" type="search" name="text" placeholder="Search" aria-label="Search" />
                        <input type="submit" value="Search" class="btn btn-success">
                    </form>
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                                @if (Auth::User()->role === "student" )
                                    <li class="nav-item dropdown">
                                        <a id="shoppingCartDropDown"  class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            <span class="position-relative">
                                                <i class="fas fa-shopping-cart" id="cart-icon"></i>
                                                <span class="position-absolute" id="cart-item-cunt"></span>
                                            </span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="shoppingCartDropDown">
                                            <a class="dropdown-item" href="{{ route('payment') }}">
                                                View shopping cart
                                            </a>
                                        </div>
                                    </li>
                                @endif
                            
                            <li class="nav-item dropdown">
                                <a id="userMenueDropDown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userMenueDropDown">
                                    @if (Auth::user()->role === 'teacher')
                                        <a class="dropdown-item" href="{{ route('teacher-profile', ['id'=>Auth::user()->teachers->id])}}"
                                            >
                                            Profile
                                        </a>
                                    @endif
                                    @if (Auth::user()->role === 'student')
                                        <a class="dropdown-item" href="{{ route('student-profile', ['id'=>Auth::user()->students->id])}}"
                                            >
                                            Profile
                                        </a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userMenueDropDown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- end of header -->



    <!-- start of content -->
    <main style="">
        <div style="">
            @yield('register')
        </div>
        @yield('main-body')
    </main>


    <!-- end of content -->
    <!-- start of footer -->
    <footer class="container-fluid pt-3 pt-md-4 border-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h3 class="footer-title">Information</h3>
                    <hr />
                    <ul class="list-unstyled footer-list" id="ul1">
                        <li><a class="footer-link" href="{{url('/')}}">Home</a></li>
                        <li>
                            <a class="footer-link" href="{{url('/about-us')}}">About Us</a>
                        </li>
                        <li>
                            <a class="footer-link" href="{{url('/contact-us')}}">Contact Us</a>
                        </li>
                        <li>
                            <a class="footer-link" href="{{url('/privacy&policy')}}">Privacy & Policy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h3 class="footer-title">Contact Us</h3>
                    <hr />
                    <ul class="list-unstyled footer-list" id="ul1">
                        <li>
                            <a class="footer-link" href="#"><i class="far fa-envelope"></i> test@test.com</a>
                        </li>
                        <li>
                            <a class="footer-link" href="#"><i class="fas fa-phone"></i> 0123456789</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h3 class="footer-title">Connect with us</h3>
                    <p>
                        <i class="fab fa-facebook p-1 footer-link"></i>
                        <i class="fab fa-twitter p-1 footer-link"></i>
                        <i class="fab fa-instagram p-1 footer-link"></i>
                        <i class="fab fa-linkedin-in p-1 footer-link"></i>
                    </p>
                    <h3 class="footer-title">Contact on the go</h3>
                    <span id="img-footer">
                        <img src="{{asset('media/app-store.svg')}} " />
                        <img src="{{asset('media/google-play.svg')}}" />
                    </span>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->

    <script src="{{asset('scripts/home.js')}}"></script>
    <script src="{{asset('scripts/multipagesslider.js')}}"></script>
    @yield('special-end-page')
</body>

</html>
