<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'booking_id' => $this->faker->numberBetween(1, 1000),
            'payment_method' => $this->faker->randomElement(['cash', 'credit_card', 'debit_card', 'fpx']),
            'amount' => $this->faker->numberBetween(100, 1000),
            'payment_status' => $this->faker->randomElement(['pending', 'paid', 'cancelled']),
        ];
    }
}
