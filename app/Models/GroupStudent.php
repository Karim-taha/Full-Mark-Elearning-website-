<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupStudent extends Model
{
    use HasFactory;

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function students()
    {
        return $this->belongsTo(Student::class,"student_id", "id");
    }
    public function groups()
    {
        return $this->belongsTo(Group::class,"group_id", "id");
    }



}
