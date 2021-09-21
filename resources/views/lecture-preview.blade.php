@extends('layouts.general')

@section('special-header')
    <link rel="stylesheet" href="{{ asset('style/livepreview.css') }}" />
    <link rel="stylesheet" href="{{asset('style/lecture_live.css')}}" />
    <link rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}" />
    <script src="{{asset('scripts/bootstrap.bundle.min.js')}}"></script>
@endsection

@section('main-body')
<main class="main" style="margin-top:25vh">
<div class="container">
    <div class="row justify-content-center

">
        <div class="video">
            <div class="text text-center mb-3">

                <p class="title">{{$data->title}}</p>
                    <p class="description">{{$data->description}}</p>
            </div>
            <div class="vid justify-content-center">

            <!-- <video controls id="myVideo">
                    <source src="{{url('storage/'.$data->file)}}"   type="video/mp4" style=" width: 900px; height:500px">
                </video> -->

                <iframe class="embed-responsive-item d-flex "
                    src="{{url('storage/'.$data->file)}}"
                    align="center" id="videothumbnail">
                </iframe>
            {{-- <video controls id="myVideo">
                <source src="{{url('storage/'.$data->file)}}"   type="video/mp4" style=" width: 900px; height:500px">
            </video> --}}
            </div>
            {{-- <a style="display: inline-block;" class ="btn btn-success" href="{{route('lecture-live')}}"> All Lectures</a> --}}
            {{-- <a style="display: inline-block;" class ="btn btn-success" href="/lectures/download/{{$data->file}}"> Download</a> --}}

        </div>
    </div>
</div>

</main>
@endsection





