<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\Fourmaxrating;
use App\Models\Teacher;
use App\Models\User;

class FourmaxratingController extends Controller
{
    //

    public function index1()
    {
        $count = DB::table('courses')->count('id');



        // $teacher = new Fourmaxrating;

        $teacher  = DB::table('teachers')
            ->join('users', 'teachers.user_id', '=', 'users.id')
            ->select(
                'users.name as name',
                'teachers.rating as rating',
                'teachers.id as teacher_id'
            )
            ->orderByRaw('teachers.rating DESC')
            ->limit(4)
            ->get();

        $group = DB::table('groups')
            ->join('course_teachers', 'groups.course_teacher_id', '=', 'course_teachers.id')
            ->join('courses', 'courses.id', '=', 'course_teachers.course_id')
            ->join('teachers', 'teachers.id', '=', 'course_teachers.teacher_id')
            ->join('users', 'teachers.user_id', '=', 'users.id')
            ->select(
                'courses.name as nameCourse',
                'groups.description as group_description',
                'users.name as userName',
                'teachers.id as teacherId',
                'groups.id as groupId'
            )
            ->distinct()
            ->limit(4)
            ->get();
        return view('index', ["data" => $teacher, 'counts' => $count, 'groups' => $group]);
    }
}
