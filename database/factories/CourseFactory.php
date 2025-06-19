<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'teacher_id' => \App\Models\Teacher::factory(),
            'subject' => $this->faker->unique()->word, // ✅ ADD `unique()`
            'course_code' => strtoupper($this->faker->bothify('CS###')),
            'credits' => $this->faker->numberBetween(1, 5),
            'description' => $this->faker->sentence,
        ];
    }
}
