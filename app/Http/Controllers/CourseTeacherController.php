<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseTeacher;
use App\Models\Course;
use App\Models\Group;
use Illuminate\Support\Facades\DB;

class CourseTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = CourseTeacher::findOrFail($id);
        return view('search-courses', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    public function searchByName()
    {
        $maxValue = DB::table('groups')->max('price');
        $minValue = DB::table('groups')->min('price');
        $courses = Course::all('name');


        $text = "";
        if (isset($_REQUEST['text'])) {
            $text = $_REQUEST['text'];
        }
        $data = DB::table('course_teachers')
            ->join('courses', 'course_teachers.course_id', '=', 'courses.id')
            ->join('teachers', 'course_teachers.teacher_id', '=', 'teachers.id')
            ->join('users', 'users.id', '=', 'teachers.user_id')
            ->join('groups', 'groups.course_teacher_id', '=', 'course_teachers.id')
            ->where('courses.name', 'like', '%' . $text . '%')
            ->orWhere('teachers.description', 'like', '%' . $text . '%')
            ->orWhere('users.name', 'like', '%' . $text . '%')
            ->select(
                'groups.id as group_id',
                'users.name as teacherName',
                'teachers.id as teacherId',
                'courses.name as courseName',
                'groups.discount',
                'groups.price',
                'courses.image',
                'groups.description',
                'courses.id as course_id',
            )
            ->limit(8)
            ->get();
        return view('search-courses', ['data' => $data, 'searchText' => $text, "course" => $courses, "maxvalue" => $maxValue, "minvalue" => $minValue]);
    }

    private $searchParams = [];
    public function extinsiveSearch()
    {
        $searchParams = json_decode($_REQUEST['searchParams'], true);
        $this->searchParams = $searchParams;
        $result = DB::table('course_teachers')
            ->join('courses', 'course_teachers.course_id', '=', 'courses.id')
            ->join('teachers', 'course_teachers.teacher_id', '=', 'teachers.id')
            ->join('users', 'users.id', '=', 'teachers.user_id')
            ->join('groups', 'groups.course_teacher_id', '=', 'course_teachers.id')
            ->whereBetween('groups.price', [$searchParams['minPrice'], $searchParams['maxPrice']])
            ->whereBetween('teachers.rating', [$searchParams['minRating'], $searchParams['maxRating']])
            ->where(function ($query) {
                $query->where('courses.name', 'like', '%' . $this->searchParams['searchText'] . '%')
                    ->orWhere('teachers.description', 'like', '%' . $this->searchParams['searchText'] . '%')
                    ->orWhere('users.name', 'like', '%' . $this->searchParams['searchText'] . '%');
            })
            ->whereIn('courses.name', $searchParams['searchCourses'])
            ->where('groups.discount', '>', $searchParams['discount'] ? 0 : -1)
            ->select(
                'groups.price',
                'users.name as teacherName',
                'teachers.id as teacherId',
                'courses.name as courseName',
                'groups.description',
                'groups.discount',
                'courses.image',
                'groups.id'
            )
            ->limit(8)
            ->get();
        $this->searchParams = [];
        return $result;
    }

    public function onSaleSearch()
    {
        $maxValue = DB::table('groups')->max('price');
        $minValue = DB::table('groups')->min('price');
        $courses = Course::all('name');


        $text = "";
        if (isset($_REQUEST['text'])) {
            $text = $_REQUEST['text'];
        }
        $data = DB::table('course_teachers')
            ->join('courses', 'course_teachers.course_id', '=', 'courses.id')
            ->join('teachers', 'course_teachers.teacher_id', '=', 'teachers.id')
            ->join('users', 'users.id', '=', 'teachers.user_id')
            ->join('groups', 'groups.course_teacher_id', '=', 'course_teachers.id')
            ->where('groups.discount', '>', 0)
            ->select(
                'groups.id as group_id',
                'users.name as teacherName',
                'teachers.id as teacherId',
                'courses.name as courseName',
                'groups.description',
                'groups.discount',
                'groups.price',
                'courses.id as course_id',

            )
            ->limit(8)
            ->get();
        return view('search-courses', ['data' => $data, "course" => $courses, "maxvalue" => $maxValue, "minvalue" => $minValue]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}