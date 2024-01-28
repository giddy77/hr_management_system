<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PayRoll>
 */
class PayRollFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'gross_salary'=>$this->faker->numberBetween(100000,900000),
        'taxes'=> $this->faker->numberBetween(100000,900000),
        'Deductions'=>$this->faker->numberBetween(100000,900000),
        'net_amount'=>$this->faker->numberBetween(100000,900000),
        'YTD_net'=>$this->faker->numberBetween(100000,900000),
        ];
    }
}
