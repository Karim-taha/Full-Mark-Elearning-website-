<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTeacher extends Model
{
    use HasFactory;


    public function course()
    {
        return $this->belongsTo(Course::class,"course_id", "id");
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class,"teacher_id", "id");
    }
    public function groups()
    {
        return $this->hasMany(Group::class);
    }
}