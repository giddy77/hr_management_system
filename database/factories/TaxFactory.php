<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tax>
 */
class TaxFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->word,
            'frequency' => $this->faker->word,
            'payer' => $this->faker->word,
            'rate' => $this->faker->randomFloat(2, 0, 100), // Assuming a decimal rate
            'start_date' => $this->faker->date,
            'end_date' => $this->faker->optional()->date, // Nullable field
        ];
    }
}
