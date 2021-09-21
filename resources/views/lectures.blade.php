@extends('layouts.general')

@section('special-header')
  <link rel="stylesheet" href="{{asset('style/lectureTable.css')}}" />
@endsection
  
  
    <table class="content-table">
      <thead>
        <tr>
          <th>File number</th>
          <th>Title</th>
          <th>Description</th>
          <th>Show</th>
          <th>Download</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach($file as $key=>$data)
    <tr>
        <td>{{++$key}}</td>
        <td>{{$data->title}}</td>
        <td>{{$data->description}}</td>
        <td><a href="/lectures/{{$data->id}}">View</a></td>
        <td><a href="/lectures/download/{{$data->file}}">Download</a></td>
        <td><a class="btn btn-danger" href="{{route('destroy.lecture',$data->id)}}">Delete</a></td>

    </tr>
    @endforeach
        {{-- <tr class="active-row">
          <td>2</td>
          <td>Sally</td>
          <td>72,400</td>
        </tr> --}}
        {{-- <tr>
          <td>3</td>
          <td>Nick</td>
          <td>52,300</td>
        </tr> --}}
      </tbody>
    </table>
  


