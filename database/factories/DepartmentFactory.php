<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = $this->faker;
        $randomUser = User::inRandomOrder()->first();

        return [
            'name'=>$faker->word,
            'manager_id' => $randomUser->id, // Adjust as needed
            'location' => $faker->city,
            'description' => $faker->sentence,
        ];

    }

}
