<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TrainingProgram>
 */
class TrainingProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $trainer = User::inRandomOrder()->first();
        return [
            'name'=> $this->faker->name,
            'description'=> $this->faker->sentence,
            'trainer'=>$trainer->id,
            'duration'=>$this->faker->dateTimeThisMonth(),
            'cost'=> $this->faker->numberBetween(2000000,5000000),
            'status'=>$this->faker->randomElement(['pending','active','completed']),

        ];
    }
}
