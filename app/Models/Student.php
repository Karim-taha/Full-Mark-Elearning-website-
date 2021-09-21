<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'birthday',
        'government',
        'user_id',
    ];


   

    public function users()
    {
        return $this->belongsTo(User::class,"user_id", "id");
    }

     public function payments()
    {
        return $this->hasMany(Payment::class , "students_id", "id");
    }


    public function groups()
    {
        return $this->belongsToMany(Group::class , "group_students" , "student_id" , "group_id");
    }
}