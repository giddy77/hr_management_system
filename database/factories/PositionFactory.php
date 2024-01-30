<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Position>
 */
class PositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departments = Department::inRandomOrder()->first();
        $user = User::inRandomOrder()->first();

        return [
            'name' => $this->faker->word,
            'department_id' => $departments->id,
            'user_id' => $user->id
        ];
    }
}
