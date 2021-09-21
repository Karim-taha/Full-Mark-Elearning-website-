<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupVideo extends Model
{
    use HasFactory;

    public function group()
    {
        return $this->belongsTo(Group::class,"group_id", "id");
    }
    public function video()
    {
        return $this->belongsTo(Video::class,"video_id", "id");
    }
}
