@extends('layouts.general')

@section('special-header')
    <link rel="stylesheet" href="{{ asset('style/teacherprofile.css') }}" />
@endsection


@section('main-body')
<main class="container" >
<div style="margin-top:25vh">
<h2 class="text-center">All Groups</h2>

<!-- <a class="success" href="{{route('groups')}}" role="button">Create New Group</a> -->
<div  id="logos-container" style="justify-content:left">
<a href="{{route('groups')}}" target="_blank"><i class="fas fa-folder-plus"></i></a>
</div>
    <table class="table col-md-12 my-4" style="margin-top:25vh">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Course</th>
                                    <th scope="col">Duration</th>
                                    <th scope="col">Days of week</th>
                                    <th scope="col">Start time</th>
                                    <th scope="col">End time</th>
                                    <th scope="col">Fees</th>
                                    <th scope="col">Enroll now</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $index=1; ?>
                            @foreach($data as $group)
                                <tr>
                                    <th scope="row"><?php echo $index++; ?></th>
                                    <td>{{$group->courseName}}</td>
                                    <td>{{$group->sd}} / {{$group->ed}}</td>
                                    <td>Sat , Mon , Wed</td>
                                    <td>{{$group->st}}</td>
                                    <td>{{$group->et}}</td>
                                    <td>{{$group->p}}</td>
                                    <td>
                                        <a class="btn btn-success" href="#" role="button">Enroll</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>



</div>

</main>
@endsection
