<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TimeSlot>
 */
class TimeSlotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'service_id' => $this->faker->numberBetween(1, 10),
            'start_time' => $this->faker->time(),
            'end_time' => $this->faker->time(),
            'available' => $this->faker->boolean(0.5),
        ];
    }
}
