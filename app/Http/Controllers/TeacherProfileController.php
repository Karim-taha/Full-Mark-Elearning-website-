<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use App\Models\Payment;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class TeacherProfileController extends Controller
{
    public function index()
    {

        $teacher = new Teacher;

        $teacher  = $teacher->all();

        return view('teacher-profile', ["data" => $teacher]);
    }

    public function index1()
    {

        $teacher = new Teacher;

        $teacher  = $teacher->all();

        return view('index', ["data" => $teacher]);
    }
    public function show($id)
    {
        $groups = DB::table('groups')
            ->join('course_teachers', 'course_teachers.id', '=', 'groups.course_teacher_id')
            ->join('courses', 'courses.id', '=', 'course_teachers.course_id')
            ->where('course_teachers.teacher_id', '=', $id)
            ->select(
                'groups.id',
                'courses.name as courseName',
                'groups.description as description',
                'groups.max_no_student',
                'groups.start_date as sd',
                'groups.end_date as ed',
                'groups.start_time as st',
                'groups.end_time as et',
                'groups.end_time',
                'groups.no_lec',
                'groups.price as p'
            )
            ->get();
        $payment = new Payment;
        $student = new Student;
        $payment = $payment->all();
        $teacher = Teacher::findOrFail($id);
        return view('teacher-profile', ["data" => $teacher, 'groups' => $groups, "payment" => $payment, "student" => $student]);
    }
}