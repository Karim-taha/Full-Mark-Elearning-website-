@extends('layouts.general')

@section('special-header')
    <link rel="stylesheet" href="{{asset('style/courseInfo.css')}}" />
@endsection

@section('main-body')
    <main>
        <!--------------------------- Start Course Detailes --------------------------------------------------------->
        <div class="container-fluid">
            <div class="row">
                <div class="courseNaDetails col-lg-12 p-5 mb-5 bg-dark text-white">
                    <h1 class="courseName  mt-5">

                        {{$group->courseTeacher->course->name}}

                    </h1>
                    <h5 class="brief mb-3">
                        {{$group->briefDescription}}

                    </h5>
                    @if($group->courseTeacher->teacher->rating > 5)
                    <span> ( </span>{{(5)}} <span> ) </span>
                    @else
                    <span> ( </span>{{$group->courseTeacher->teacher->rating}}<span> ) </span>
                    @endif

                    <span class="rateNumbers mb-2" id="teacher-rating">
                        @for( $i=1 ; $i <= ($group->courseTeacher->teacher->rating) && $i <= 5 ; $i++)
                            <i class="fas fa-star text-warning"></i>
                        @endfor
                </span>
                    <div class="author mt-3">
                        Created By
                        <a href="{{route('teacher-profile',$group->courseTeacher->teacher->id)}}" class="authorName text-info ml-1">
                           {{$group->courseTeacher->teacher->users->name}}
                        </a>
                    </div>
                    <div class="details mt-3 col-lg-12 col-sm-12">
                        <span class="update"><i class="far fa-edit"></i> last updated {{$group->updated_at}}
                        </span>
                        <span class="lang ml-4"><i class="fas fa-globe-americas"></i> {{$group->language}}
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-------------------------------- End Course Detailes ------------------------------------------------------>

        <!------------------------------- Start Course Content ---------------------------------------------------------------->

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Start (What you'll learn) div -->
                    <div class="container p-4 bg-light rounded-lg shadow p-4 mb-5 bg-white">
                        <p class="whatLearn font-weight-bold">What you will learn :</p>
                        <div class="row">
                            <div class="learn col-6">
                                <p>
                                    <i class="fas fa-check"></i><span> {{$group->whatLearn}}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End (What you'll learn) div -->



                    <!-- Start Requirements -->
                    <div class="container bg-light shadow p-4 mb-4 bg-white mb-5">
                        <p class="requirements font-weight-bold">Requirements</p>
                        <div class="reqPoints">
                            <ul>
                                <li>{{$group->requirements}}</li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Requirements -->

                    <!-- Start Description -->

                    <div class="container bg-light shadow p-4 mb-4 bg-white mb-5">
                        <p class="desc font-weight-bold">Description</p>
                        <div class="row">
                            <p class="decWords p-3" style="line-height: 30px; font-size: larger">
                                {{$group->description}}

                            </p>


                        </div>
                    </div>

                    <!-- End Description -->
                </div>
                <!-- closing div for <div class="col-lg-9"> -->

                <!-- Start Side Card -->
                <div class="card shadow p-4 mb-4 bg-white col-lg-3 offset-1" style="height: 50rem">
                    <img class="card-img-top"  src="{{ asset('media/' . $group->courseTeacher->course->image) }}" alt="Course Image" />
                    <div class="card-body">
                        <h3 class="card-title text-center">
                            {{$group->courseTeacher->course->name}}
                        </h3>
                        <p class="card-text">
                            {{$group->briefDescription}}
                        </p>
                        @if($group->discount > 0 )
                        <h3 class="card-text font-weight-bolder text-center">
                        <p class="price">Price : <span class="spanPriceDis mr-3">{{$group->price }} LE</span>
                            <p class="discount">{{ $group->discount}} LE </p></p>                        </h3>
                        @else
                        <h3 class="card-text font-weight-bolder text-center">
                            {{$group->price}} <span>LE</span>
                        </h3>
                        @endif
                        @if (Auth::user())
                        @if (Auth::user()->role === "student")
                        <button type="button" onclick="addCartHandler({{$group->id}})" class="btn btn-danger btn-block my-3">
                            Add to cart
                        </button>
                        @endif
                        @else
                        <a type="button" href="{{url('http://localhost:8000/login')}}" class="btn btn-danger btn-block my-3">
                            Add to cart
                        </a>
                        @endif
                        {{-- @can('isStudent')

                        @else
                        <a type="button" href="" class="btn btn-danger btn-block my-3">
                            Add to cart
                        </a>
                        @endcan --}}
                        <button onclick="addCartHandler({{$group->id}});window.location.href = `http://localhost:8000/payment`;" class="btn btn-outline-danger my-3 btn-block border border-warning">
                            Buy now
                        </button>
                        <p class="text-center">30-Day Money-Back Guarantee</p>
                        <div class="font-weight-bold">
                            <h3>This course includes:</h3>
                            <ul class="list-unstyled">

                                <li class="my-3">
                                    <i class="fas fa-infinity"></i> Full lifetime access
                                </li>
                                <li class="my-3">
                                    <i class="fas fa-mobile-alt"></i> Access on mobile and tablets
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Side Card -->

        <!-------------------------------------- End Course Content------------------------------------------->

    </main>
@endsection
