@extends('layouts.general')

@section('special-header')
    <link rel="stylesheet" href="{{ asset('style/teacherprofile.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/chat.css') }}" />
@endsection

@section('main-body')
    <main style="min-height: 100vh">
        <div class="container-fluid">
            <div class="row justify-content-around">
                <ul class="nav nav-tabs col-md-12 px-4 my-3" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="schedule-tab" data-toggle="tab" href="#schedule" role="tab"
                            aria-controls="schedule" aria-selected="false">Schedule</a>
                    </li>
                    @if (Auth::user())
                        @if (Auth::user()->role === "teacher")
                            @if (Auth::user()->teachers->id === $data->id )
                                <li class="nav-item">
                                    <a class="nav-link" id="group-tab" data-toggle="tab" href="#group" role="tab"
                                        aria-controls="group" aria-selected="false">New group</a>
                                </li>
                            @endif
                        @endif
                    @endif
                </ul>
                <div class="tab-content container-fluid" id="myTabContent">
                    <div class="tab-pane col-md-12 fade show active" id="profile" role="tabpanel"
                        aria-labelledby="profile-tab">
                        <div class="row">
                            <aside class="col-md-4 text-center" id="teacher-card">
                                <img src="{{asset('media/TempProfile.jpg')}}" alt="profile pic" />
                                <h1>{{ $data->users->name }}</h1>
                                <span id="teacher-rating">
                                        @for( $i=1 ; $i <= ($data->rating) && $i <= 5 ; $i++)
                                            <i class="fas fa-star"></i>
                                        @endfor
                                </span>
                                <div id="logos-container" class="d-flex justify-content-around">
                                    <a href="{{ $data->t_link_facebook }}" target="_blank"><i class="fab fa-facebook"></i></a>
                                    <a href="{{ $data->t_link_youtube }}" target="_blank"><i class="fab fa-youtube"></i></a>
                                </div>
                            </aside>
                            <article class="row col-md-8 col-sm-12">
                                <div class="col-md-12" id="contentbody">
                                    <h2>Description</h2>

                                    <div class="details">
                                        <p>
                                            {{$data->description}}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-12" id="courses">
                                    <h2>Courses</h2>
                                    <div class="details" id="courses-list">
                                        <ol>
                                            @if (count($data->courses) === 0)
                                            <p>This teacher doesn't have any courses yet</p>
                                            @else
                                            @foreach($data->courses as $course)
                                            <li>{{$course["name"]}}</li>
                                            @endforeach
                                            @endif
                                        </ol>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="tab-pane col-md-12 fade" id="schedule" role="tabpanel" aria-labelledby="schedule-tab">
                        
                        <table class="table col-md-12 my-4" style="margin-top:25vh">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Course</th>
                                    <th scope="col">Start date</th>
                                    <th scope="col">End date</th>
                                    <th scope="col">No of lectures</th>
                                    <th scope="col">Fees</th>
                                    <th></th>
                                    @can('isTeacher')
                                    <th>View</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                            <?php $index=1; ?>
                            @foreach($data->courseTeachers as $courseTeacher)
                                @foreach ($courseTeacher->groups as $group)
                                <tr>
                                    <th scope="row"><?php echo $index++; ?></th>
                                    <td>{{$courseTeacher->course->name}}</td>
                                    <td>{{$group->start_date}}</td>
                                    <td>{{$group->end_date}}</td>
                                    <td>{{$group->no_lec}}</td>
                                    <td>{{$group->price}}</td>
                                    <td>
                                        @if (Auth::user())
                                            @if (Auth::user()->role === "teacher")
                                                @if (Auth::user()->teachers->id === $data->id )
                                                        <a class="btn btn-success" href="{{route('lecture-live', $group->id)}}">Go to course page</a>
                                                    
                                                @endif
                                            @endif
                                            @else
                                            <a onclick="addCartHandler({{$group->id}})" class="btn btn-success"
                                                href="{{route('course-info', $group->id)}}" role="button">Enroll</a>
                                        @endif

                                        
                                    </td>
                                </tr>
                                @endforeach
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                    @if (Auth::user())
                        @if (Auth::user()->role === "teacher")
                            @if (Auth::user()->teachers->id === $data->id )
                                <div class="tab-pane col-md-12 fade" id="group" role="tabpanel" aria-labelledby="group-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            New group
                                        </div>
                                        <div class="card-body">
                                            <form action="{{route('group.store')}}" method="post">
                                                @csrf
                                                <div class="row justify-content-center ">
                                                <h2 class="text-center">Create New Group</h2>

                                                    <div class="form-group col-10 " >
                                                        <label for="course">Course</label>
                                                        <select name="course_teacher" style="border: 1px solid #6ab04c" id="course" class="col-md-12 form-control">
                                                            @foreach ($data->courses as $course)
                                                                <option value="{{ $course->id }}">{{$course->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-10">
                                                        <label for="language">Language</label>
                                                        <input type="text" id="language" style="border: 1px solid #6ab04c" class="form-control" name="language" placeholder="language">
                                                    </div>

                                                    <div class="form-group col-10">
                                                        <label for="price">Price</label>
                                                        <input type="number" style="border: 1px solid #6ab04c" class="form-control" name="price" placeholder="Price" min="10">
                                                    </div>

                                                    <div class="form-group col-10 " >
                                                        <label for="description">Description</label>
                                                        <textarea class="col-md-12 form-control" name="description" placeholder="Write something.." style="border: 1px solid #6ab04c"></textarea>
                                                    </div>

                                                    <div class="form-group col-10">
                                                        <label for="briefDescription">Brief description</label>
                                                        <textarea class="col-md-12 form-control" id="briefDescription" name="briefDescription" placeholder="Write something.." style="border: 1px solid #6ab04c"></textarea>
                                                    </div>

                                                    <div class="form-group col-10">
                                                        <label for="whatLearn">What will the student learn</label>
                                                        <textarea class="col-md-12 form-control" id="whatLearn" name="whatLearn" placeholder="Write something.." style="border: 1px solid #6ab04c"></textarea>
                                                    </div>

                                                    <div class="form-group col-10">
                                                        <label for="requirements">Requirements</label>
                                                        <textarea class="col-md-12 form-control" id="requirements" name="requirements" placeholder="Write something.." style="border: 1px solid #6ab04c"></textarea>
                                                    </div>

                                                    <div class="form-group col-10">
                                                        <label for="max_no_student">Max No Student</label>
                                                        <input type="number" style="border: 1px solid #6ab04c" class="form-control" name="max_no_student" placeholder="Max No Student" min="5">
                                                    </div>

                                                    <div class="form-group col-10">
                                                        <label for="start_date">Start Date</label>
                                                            <input class="form-control" style="border: 1px solid #6ab04c" type="date" name="start_date">
                                                    </div>

                                                    <div class="form-group col-10">
                                                        <label for="end_date">End Date</label>
                                                            <input class="form-control" style="border: 1px solid #6ab04c" type="date" name="end_date">
                                                    </div>

                                                    <div class="form-group col-10">
                                                        <label for="start_time">Start Time</label>
                                                        <input class="form-control" style="border: 1px solid #6ab04c" type="time" name="start_time">
                                                    </div>

                                                    <div class="form-group col-10">
                                                        <label for="end_time">End Time</label>
                                                        <input class="form-control" style="border: 1px solid #6ab04c" type="time" name="end_time">
                                                    </div>

                                                    <div class="form-group col-10">
                                                        <label for="no_lec">Number of Lectures</label>
                                                        <input type="number" style="border: 1px solid #6ab04c" class="form-control" name="no_lec" placeholder="Number of Lectures" min="0">
                                                    </div>

                                                    <div class="form-group col-10">
                                                        <button type="submit" class="btn btn-success">Create</button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endif

                </div>
            </div>
        </div>

        <!-- Start Chat-->
        {{-- <input type="button" value="Chat" name="chat" class="open-button" onclick="openchat()" />

        <div class="chat-popup" id="FormHandler">
            <h1><span style="color: rgb(170, 67, 170)">AcadHool</span> Chat</h1>
            <div id="msgs-container">
                <div class="container1">
                    <label>no3man</label>
                    <p>azyk ya fady</p>
                    <span class="timeNo3man">11:00</span>
                </div>

                <div class="container1 fady">
                    <label>fady</label>
                    <p>no3man azyk 3aml eh</p>
                    <span class="timeFady">11:01</span>
                </div>

                <div class="container1">
                    <label>no3man</label>
                    <p>ana zy l foool</p>
                    <span class="timeNo3man">11:02</span>
                </div>
            </div>
            <textarea placeholder="texting with your teacher....." name="msg" id="msgTextArea" required></textarea>
            <div class="btn1">
                <i class="fas fa-times" id="fCansle"></i>
                <input type="button" name="close" class="btn cancel" onclick="closechat()" />
                <i class="fas fa-paper-plane" id="fSend"></i>
                <input type="button" onclick="messageHandler()" name="send" class="btn" />
            </div>
        </div> --}}
        <!-- End Chat-->
    </main>
@endsection

@section('special-end-page')
    <script src="{{asset('scripts/chat.js')}}"></script>
@endsection
