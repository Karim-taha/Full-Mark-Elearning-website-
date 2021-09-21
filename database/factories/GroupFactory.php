<?php

namespace Database\Factories;

use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Group::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->text(50),
            'max_no_student' => $this->faker->randomDigit,
            'start_date' => $this->faker->date,
            'end_date' => $this->faker->date,
            'start_time' => $this->faker->time,
            'end_time' => $this->faker->time,
            'no_lec' => $this->faker->randomDigit,
            'price' => $this->faker->randomDigit,
            'briefDescription' => $this->faker->word,
            'language' => 'English',
            'price' => $this->faker->randomDigit,
            'whatLearn' => $this->faker->paragraph,
            'requirements' => $this->faker->paragraph,
            'course_teacher_id' => $this->faker->numberBetween(1, 10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}