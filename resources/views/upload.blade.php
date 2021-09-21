@extends('layouts.general')

@section('special-header')
<link rel="stylesheet" href="{{ asset('style/upload.css') }}" />
@endsection

@section('main-body')
<main>
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
            <button type="submit" class="btn btn-success">Upload</button>
            <span>You can upload only videos in (mp4) and files in (pdf - docx).</span>
          </form>
        </div>
        </div>
        </div>
    </div>
</main>
@endsection

