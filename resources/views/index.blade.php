@extends('layouts.general')


@section('main-body')
{{-- <link rel="stylesheet" href="{{ asset('style/teacherprofile.css') }}" /> --}}
    <main>
        <!-- start of carosel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./media/slide_1.jpg" alt="First slide" />
                    <div style="background: #00364028" class="carousel-caption d-none d-md-block">
                        <h5>Study hard</h5>
                        <p>You can achive your goals</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./media/slide_2.jpg" alt="Second slide" />
                    <div style="background: #00364028" class="carousel-caption d-none d-md-block">
                        <h5>Study hard</h5>
                        <p>You can achive your goals</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./media/slide_3.jpg" alt="Third slide" />
                    <div style="background: #00364028" class="carousel-caption d-none d-md-block">
                        <h5>Study hard</h5>
                        <p>You can achive your goals</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="lower-slider mt-5">
            <div>
                <span >
                <i class="fas fa-laptop" style="font-size: 70px " id="fontaweson"></i>
                <div class="lower-slider_1  mt-2" id="lower-slider_1">
                    <b>{{$counts}} online Courses</b> <br />
                    Enjoy a variety of fresh topics
                </div>
                </span>
            </div>
            <div>
                <span >
                <i class="fas fa-chalkboard-teacher" style="font-size: 70px " id="fontaweson"></i>
                <div class="lower-slider_2 mt-2 " id="lower-slider_2">
                    <b>Fully equipped staff</b> <br />
                    Up to date technologies
                </div>
                </span>
            </div>
            <div>
                <span>
                     <i class="fas fa-tablet-alt   " style="font-size: 70px " id="fontaweson"></i>

                        <div class="lower-slider_3  mt-2" id="lower-slider_3">
                            <b>Cross plateforms</b> <br />
                            Full mobile support
                        </div>
                </span>
            </div>
        </div>
        <!-- end of carosel -->
        <!-- start of mid belt -->
        <div class="container-fluid" style="margin-top: 10vh; margin-bottom: 10vh">
            <div id="middle-row" class="row">
                <div class="col-md-7 col-sm-12">
                    <div class="cont ml-5 pt-2 my-4 text-light">
                        <h2 class="font-weight-bol h1">Full-Mark for your CHILDREN</h2>
                        <p class="h4" style="color: rgb(168, 168, 168)">
                            Get an unlimited access to Full-Mark top courses for your
                            children
                        </p>
                        @if (Auth::User())
                            <a href="{{route('courses.search')}}" class="btn btn-info btn-lg">
                                Browse our courses
                            </a>
                        @else
                            <a href="{{route('register')}}" class="btn btn-info btn-lg">
                                Join full-mark now
                            </a>
                        @endif
                        
                    </div>
                </div>
                <img src="./media/pexels-energepiccom-313690.jpg" class="img mx-auto col-md-4 col-sm-12 my-4"
                    id="mid-blt-img" />
            </div>
        </div>
        <!-- end of mid belt -->
        <!-- start of multi pages slider -->
        <nav id="iframe-slider">
            <ul>
                <li>
                    <button class="iframe-slider-link visited" id="trendinglink" href="#trending">
                        Trending course
                    </button>
                </li>
                <li>
                    <button class="iframe-slider-link" id="popularlink" href="#popular">
                        Top teachers
                    </button>
                </li>
            </ul>
        </nav>
        <div id="trending">
            <div class="container mt-5 mb-4">
                <div class="row">
                    @foreach($groups as $group)
                        <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="card card-block shadow scale-up-center" style="height:24rem">
                                <img class="card-img-top" alt="KIDS_S" src="media/KIDS_S.jpeg"
                                    style="height: 180px; width: 100%; display: block" />
                                <div class="card-block text-center">
                                    <h4 class="card-title text-center mt-2">{{$group->nameCourse}}</h4>
                                    <a href="{{route('teacher-profile',$group->teacherId)}}">{{$group->userName}}</a>
                                    <p class="card-text text-center p-4 showDescription">
                                        {{$group->group_description}}
                                    </p>
                                    <a href="{{route('course-info', $group->groupId)}}" class="btn btn-success m-3 d-block">enroll me</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div id="popular" class="d-none">
            <div class="container my-5">
                <div class="row" style="justify-content: space-around">
                @foreach($data as $user)
                    <div class="col-md-6 col-lg-3 col-sm-12">
                        <div class="card col bg-light shadow scale-up-center">
                            <div style="width: 100%; text-align: center">
                                <img src="./media/TempProfile.jpg" class="card-img-top rounded-circle mt-4"
                                    style="width: 50%" alt="Temp profile" />
                            </div>
                            <div class="card-body">
                                <div style="text-align: center">
                                    <p class="card-title" style="color: #6610f2; font-weight: 700">
                                    {{$user->name}}
                                    </p>

                                    <!-- <div class="flex-nowrap d-flex align-items-center"> -->
                                    <span id="teacher-rating" >
                                    @for( $i=1 ; $i <= $user->rating && $i <= 5 ; $i++)
                                                <i class="fas fa-star golden"></i>
                                            @endfor
                                    </span>
                                    <!-- </div> -->
                                    <hr />
                                </div>
                                <a href="{{route('teacher-profile',$user->teacher_id)}}" class="btn btn-success mx-auto d-block">Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>


        <div class="aboutUs text container-fluid" style="box-shadow: 1px 1px 50px grey">
                <div class="head text-center">
                    About Full Mark
                </div>
                <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <ul class="icons list-unstyled pb-3">
                        <li class="icons my-3">
                            <i class="icon fas fa-infinity pr-2"></i> <span class="features">Full lifetime access.</span>
                        </li>
                        <li class="my-3">
                            <i class="icon fas fa-mobile-alt pr-2"></i> <span class="features">Access on mobile and tablets.</span>
                        </li>
                        <li class="my-3">
                            <i class="icon fab fa-cc-paypal pr-2"></i> <span class="features">Secure payment.</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-1"></div>

                <div class="col-md-5 col-sm-6 pb-3">
                    <ul class="icons list-unstyled">
                        <li class="icons my-3">
                            <i class="icon fas fa-star pr-2"></i> <span class="features">Choose your favorite teacher.</span>
                        </li>
                        <li class="my-3">
                            <i class="icon fas fa-gift pr-2"></i> <span class="features">Have Good offers on courses.</span>
                        </li>
                        <li class="my-3">
                            <i class="icon fas fa-download pr-2"></i> <span class="features">Ability to download live lectures.</span>
                        </li>
                    </ul>
                </div>
                {{-- <div class="iconContainer col-4">
                    <ul class="icons list-unstyled">
                        <li class="icons my-3">
                            <i class="icon fas fa-infinity"></i> Full lifetime access.
                        </li>
                        <li class="my-3">
                            <i class="icon fas fa-mobile-alt"></i> Access on mobile and tablets.
                        </li>
                        <li class="my-3">
                            <i class="icon fab fa-cc-paypal"></i> Secure payment.
                        </li>
                    </ul>
                </div> --}}
                {{-- <div class="col-2">
                    <div class="vl"></div>
                </div> --}}
                {{-- <div class="iconContainer col-6">
                    <ul class="icons list-unstyled">
                        <li class="icons my-3">
                            <i class="icon fas fa-star"></i> Choose your favorite teacher.
                        </li>
                        <li class="my-3">
                            <i class="icon fas fa-gift"></i> Have Good offers on courses.
                        </li>
                        <li class="my-3">
                            <i class="icon fas fa-download"></i> Ability to download recorded live lectures.
                        </li>
                    </ul>
                </div> --}}
            </div>
        </div>
        </div>
        <!-- end of multi pages slider -->
    </main>
@endsection
