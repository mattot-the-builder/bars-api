<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 1000),
            'service_id' => $this->faker->numberBetween(1, 10),
            'time_slot_id' => $this->faker->numberBetween(1, 40),
            'status' => $this->faker->randomElement(['pending', 'confirm', 'cancel']),
            'total_price' => $this->faker->numberBetween(100, 1000),
        ];
    }
}
