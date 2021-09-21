<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teacher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at' => now(),
            'updated_at' => now(),
            't_national_id' => $this->faker->randomDigit,
            't_acc_reccivable' => $this->faker->randomDigit,
            't_net_income' => $this->faker->randomDigit,
            'description' => $this->faker->word,
            't_link_facebook' => $this->faker->word,
            't_link_youtube' => $this->faker->word,
            'rating' => $this->faker->numberBetween(1, 5),
            'user_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
