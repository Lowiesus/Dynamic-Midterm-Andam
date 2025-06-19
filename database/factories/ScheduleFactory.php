<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_id' => \App\Models\Course::factory(),
        'day_of_the_week' => $this->faker->dayOfWeek,
        'time_slot' => $this->faker->time('H:i'),
        'room' => 'Room ' . $this->faker->randomDigitNotZero,
        'term' => $this->faker->randomElement(['1st Sem', '2nd Sem']),
        ];
    }
}
