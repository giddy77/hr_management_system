<?php

namespace Database\Factories;

use App\Models\Department;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departments = Department::inRandomOrder()->first();
        return [
            'name' => $this->faker->name,
            'start' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d H:i:s'),
            'end' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d H:i:s'),
            'duration' => function (array $attributes) {
                $start = Carbon::parse($attributes['start']);
                $end = Carbon::parse($attributes['end']);
                return $end->diffInHours($start); // You can use other units like diffInDays, diffInMinutes, etc.
            },
            'department_id' => $departments->id
        ];
    }
}
