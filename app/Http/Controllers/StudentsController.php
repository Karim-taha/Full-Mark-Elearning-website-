<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class StudentsController extends Controller
{
    public function show($id)
    {
        $data = Student::find($id);
        return view('student-profile', ["data"=>$data]);
    }
    public function update(){
        if (isset($_REQUEST['government']) && isset($_REQUEST['birthday']) ){
          
            $student = Auth::user()->students;
            $student->government = $_REQUEST['government'];
            $student->birthday = $_REQUEST['birthday'];
            $student->save();
            return redirect()->route("student-profile" , ["id" => Auth::user()->students->id ]);
        }
       
    }
}