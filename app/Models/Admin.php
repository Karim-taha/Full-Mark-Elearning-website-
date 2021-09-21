<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;


     public function actionAdmins()
    {
        return $this->hasMany(ActionAdmin::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
