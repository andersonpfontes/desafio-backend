<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'payee_id' => fake()->randomNumber(3,true),
            'payer_id' => fake()->randomNumber(3,true),
            'value' => fake()->randomFloat(2),
        ];
    }
}
