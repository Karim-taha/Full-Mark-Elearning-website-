@extends('layouts.general')

@section('special-header')
    <link rel="stylesheet" href="{{asset('style/lecture_live.css')}}" />
    <link rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}" />
    <script src="{{asset('scripts/bootstrap.bundle.min.js')}}"></script>
@endsection

@section(  'main-body')
    <main style="margin-top:25vh ; min-height: 100vh">
        <nav>
            <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                <a class="nav-item nav-link" id="nav-live-tab" data-toggle="tab" href="#nav-live" role="tab" aria-controls="nav-live" aria-selected="true">All files</a>
                @can('isTeacher')
                <a class="nav-item nav-link" id="nav-recorded-tab" data-toggle="tab" href="#nav-recorded" role="tab" aria-controls="nav-recorded" aria-selected="true">Upload file</a>
                @endcan
                <!-- <a class="nav-item nav-link" id="nav-VideosAndSessions-tab" data-toggle="tab" href="#nav-VideosAndSessions" role="tab" aria-controls="nav-VideosAndSessions" aria-selected="true">Videos and session</a> -->
            </div>
        </nav>

    <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-live" role="tabpanel" aria-labelledby="nav-recorded-tab">
                <div class="m-3">
                    <div class="col-12 accordion accordion-flush" id="accordionFlushExample">
                        @foreach($file as $key=>$data)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-heading{{++$key}}">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse{{$key}}"
                                        aria-expanded="false"
                                        aria-controls="flush-collapse{{$key}}"
                                    >
                                    {{$data->title}}
                                    </button>
                                    </h2>
                                    <div
                                    id="flush-collapse{{$key}}"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading{{$key}}"
                                    data-bs-parent="#accordionFlushExample"
                                    >
                                    <div class="accordion-body" id="accordion-body" >
                                        <div class="form-check">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <i class="icon fas fa-folder-open"></i>
                                        <a class="link ml-1" href="{{route('show.lecture', $data->id)}}">{{$data->description}}</a>
                                        </label>
                                        </div>
                                    </div>

                                    <div class="accordion-body" id="accordion-body" >
                                        <div class="form-check">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <i class="icon fas fa-download"></i>
                                        <a class="link ml-1" href="/lectures/download/{{$data->file}}"> Download</a>
                                        </label>
                                        </div>
                                    </div>
                                    @can('isTeacher')
                                    <div class="accordion-body" id="accordion-body" >
                                        <div class="form-check">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <i class="icon fas fa-trash-alt"></i>
                                        <a class="link ml-1" href="{{route('destroy.lecture',$data->id)}}"> Delete</a>
                                        </label>
                                        </div>
                                    </div>
                                    @endcan
                                    </div>
                                </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @can('isTeacher')
            <div class="tab-pane fade" id="nav-recorded" role="tabpanel" aria-labelledby="nav-live-tab">
                <div class="m-3">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <form class="form" method="POST"  enctype="multipart/form-data" action="{{route('lectureLive')}}">
                                        {{csrf_field()}}
                                        <h3 class="text-center">Upload files</h3>
                                        <div class="form-group">
                                            <label for="title">Title:</label>
                                            <input type="text" name="title" class="form-control" id="title">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description:</label>
                                            <input type="text" name="description" class="form-control" id="description">
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Upload video</label>
                                            <input class="form-control" name="file" type="file" id="formFile">
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control" name="group" type="hidden" id="group" value="{{$data->id}}">
                                        </div>
                                        <button type="submit" class="btn btn-success">Upload</button>
                                        <span>You can upload only videos in (mp4) and files in (pdf - docx).</span>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endcan

    </div>
    </main>
@endsection


