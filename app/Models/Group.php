<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable = [

        'description',

        'max_no_student',

        'start_date',

        'end_date',

        'start_time',

        'end_time',

        'no_lec',

        'price',

    ];
    public function courseTeacher(){
        return $this->belongsTo(CourseTeacher::class,"course_teacher_id", "id");
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
    public function payments(){
        return $this->hasMany(Payment::class);
    }
    public function video()
    {
        return $this->belongsToMany(Video::class, 'group_videos');
    }
}