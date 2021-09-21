<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;


    public function  students()
    {
        return $this->belongsTo(Student::class);
    }

    public function  group()
    {
        return $this->belongsTo(Group::class);
    }
}
