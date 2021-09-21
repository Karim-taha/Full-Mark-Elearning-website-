@extends('layouts.general')
@section('main-body')
    <main style="margin-top: 15vh;min-height: 100vh">
        <div class="container-fluid">
            <div class="row justify-content-around">
                <ul class="nav nav-tabs col-md-12 px-4 my-3" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Personal info</a>
                    </li>
                    @if (Auth::user()->students->id === $data->id)
                    <li class="nav-item">
                        <a class="nav-link" id="schedule-tab" data-toggle="tab" href="#schedule" role="tab"
                            aria-controls="schedule" aria-selected="false">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="Payments-tab" data-toggle="tab" href="#Payments" role="tab"
                            aria-controls="Payments" aria-selected="false">Payments
                        </a>
                    </li>
                    @endif
                    
                </ul>
                <div class="tab-content container-fluid" id="myTabContent">
                    <div class="tab-pane col-md-12 fade show active" id="profile" role="tabpanel"
                        aria-labelledby="profile-tab">
                        <div class="row">
                            <img src="{{asset('media/TempProfile.jpg')}}" alt="profile pic"  class="col-3"/>
                            <div class="col-9">
                                <div class="card h-100">
                                    <div class="card-header"><h4 class="h1 text-info">{{ $data->users->name }}</h4></div>
                                    
                                    <div class="card-body">
                                        <form action="/student/update" method="post">
                                            @csrf
                                            <table class="table table-striped">
                                                <tr>
                                                    <th>E-mail</th>
                                                    <td>{{$data->users->email}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Government</th>
                                                    <td id="government-row">{{$data->government}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Birthday</th>
                                                    <td id="birthday-row">{{$data->birthday}}</td>
                                                </tr>
                                                @if (Auth::User()->students->id === $data->id)
                                                    <tr>
                                                        <th></th>
                                                        <td id="submit-row"><input type="button" class="btn btn-success ml-auto d-block mr-3" value="Update" onclick="updateDataHandler()" /></td>
                                                    </tr>
                                                @endif
                                                
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (Auth::user()->students->id === $data->id)
                        <div class="tab-pane col-md-12 fade" id="schedule" role="tabpanel" aria-labelledby="schedule-tab">
                            @if (count($data->groups) == 0)
                                <p>Sorry you are not enrolled in any courses yet</p>
                            @else
                                <table class="table table-striped table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Course name</th>
                                            <th scope="col">Teacher name</th>
                                            <th scope="col"></th>
                                        </tr>
                                        
                                    </thead>                            
                                    @foreach ($data->groups as $group)
                                        <tr>
                                            <td>1</td>
                                            <td>{{$group->courseTeacher->course->name}}</td>
                                            <td>{{$group->courseTeacher->teacher->users->name}}</td>
                                            <td><a class="btn btn-success" href="{{route('lecture-live', $group->id )}}">View</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            @endif
                            </div>
                            <div class="tab-pane col-md-12 fade" id="Payments" role="tabpanel" aria-labelledby="Payments-tab">
                            
                            @if (count($data->payments) == 0)
                                <p>No recordered payments yet</p>
                            @else
                                <table class="table table-striped table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Course</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Method</th>
                                            <th></th>
                                        </tr>
                                        
                                    </thead>
                                                            
                                    @foreach ($data->payments as $payment)
                                        <tr>
                                            <td>1</td>
                                            <td>{{$payment->group->courseTeacher->course->name}}</td>
                                            <td>{{number_format($payment->total , 2)}}</td>
                                            <td>{{$payment->updated_at}}</td>
                                            <td>{{$payment->status}}</td>
                                            <td>{{$payment->MethodOfPayment}}</td>
                                            <th>
                                                @if ($payment->is_paid == 1)
                                                    <a class="btn btn-success" href="{{route('lecture-live', $group->id )}}">View</a>
                                                @else
                                                    <a href="http://localhost:8000/payment/{{$payment->group_id}}" class="btn btn-success">Pay now</a>
                                                @endif
                                            </th>
                                        </tr>
                                    @endforeach
                                </table>
                            @endif
                        </div>
                    @endif
                    
                </div>
            </div>
        </div>
    </main>
@endsection

@section('special-end-page')
    <script src="{{asset('scripts/studentProfile.js')}}"></script>
@endsection