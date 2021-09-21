<?php

namespace Database\Factories;

use App\Models\CourseTeacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseTeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CourseTeacher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'level' => $this->faker->word,
            'teacher_id' => $this->faker->numberBetween(1, 10),
            'course_id' => $this->faker->numberBetween(1, 10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
