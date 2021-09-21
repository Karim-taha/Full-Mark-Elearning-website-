<?php

namespace Database\Seeders;

use App\Models\CourseTeacher;
use Illuminate\Database\Seeder;

class CourseTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseTeacher::factory()->count(10)->create();
    }
}
