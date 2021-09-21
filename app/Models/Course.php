<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable=[

        'name',
        'briefDescription',
        'language',
        'price',
        'description',
        'whatLearn',
        'rating',
        'image',
        'requirements',

    ];

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'course_teachers');
    }
}
