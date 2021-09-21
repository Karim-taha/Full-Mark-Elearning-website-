<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Group;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    //
    public function index()
    {
        return view("group");
    }

    public function store(){

        $group = new Group;

        $group->description = request('description');

        $group->max_no_student = request('max_no_student');

        $group->start_date = request('start_date');

        $group->end_date = request('end_date');

        $group->start_time = request('start_time');

        $group->end_time = request('end_time');

        $group->no_lec = request('no_lec');

        $group->price = request('price');

        $group->requirements = request('requirements');

        $group->briefDescription = request('briefDescription');

        $group->language = request('language');

        $group->whatLearn = request('whatLearn');

        $group->course_teacher_id = request('course_teacher');

        $group->save();

        return redirect()->route('teacher-profile', ['id'=>Auth::user()->teachers->id]);



    }

    public function showGroup($id)
    {
        $result = DB::table('groups')
        // ->join('teachers', 'teachers.id', '=', 'groups.teacher_id')
        ->join('course_teachers' ,'course_teachers.id' , '=' , 'groups.course_teacher_id')
        ->join('courses' ,'courses.id' , '=' , 'course_teachers.course_id')
        ->where('course_teachers.teacher_id' , '=' , $id)
        ->select('courses.name as courseName','groups.description as description','groups.max_no_student','groups.start_date as sd','groups.end_date as ed',
        'groups.start_time as st','groups.end_time as et','groups.end_time','groups.no_lec','groups.price as p')
        ->get();

            return view('allgroups',["data" => $result]);
    }

    private function getGroupData($id){

        $data = DB::table('groups')
                    ->join('course_teachers' , 'groups.course_teacher_id' ,'=' ,"course_teachers.id")
                    ->join('courses' , 'course_teachers.course_id' ,'=' ,"courses.id")
                    ->where('groups.id' , '=' , $id)
                    ->select("courses.name" , 'groups.price' , 'groups.id' , 'groups.discount')
                    ->first();
        return $data;
    }

    public function shoppingCartData(){
        if(isset( $_REQUEST['shoppingCart'] )){

            $arrayOfGroups = json_decode($_REQUEST['shoppingCart'], true);

            $data = [];
            foreach ($arrayOfGroups as  $id) {
                array_push($data , $this->getGroupData($id));
            }
            return $data;
        }


    }
    public function show($id)
    {
        $group = Group::findOrFail($id);
        return view('course-info', ["group" => $group]);
    }

}