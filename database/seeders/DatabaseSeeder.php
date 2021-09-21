<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        // $this->call(UserSeeder::class);

        $this->call(TeacherSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(CourseTeacherSeeder::class);
        $this->call(GroupSeeder::class);
        $this->call(StudentSeeder::class);
    }
}
