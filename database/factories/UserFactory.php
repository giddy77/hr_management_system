<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = User::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->unique()->phoneNumber,
            'alt_phone' => $this->faker->phoneNumber,
            'date_joined' => $this->faker->dateTimeThisDecade,
            'address' => $this->faker->address,
            'staff_no' => 'STAFF' . $this->faker->unique()->randomNumber(5),
            'emp_status' => $this->faker->randomElement(['Active', 'Inactive']),
            'role' => $this->faker->numberBetween(1,5),
            'manager_id' => $this->faker->numberBetween(1, 5),
            'review_id' => $this->faker->numberBetween(1, 5),
            'photo' => 'path/to/photo.jpg',
            'age' => $this->faker->numberBetween(1,50),
            'gender'=> $this->faker->randomElement(['MALE','FEMALE']),
            'department_id'=>$this->faker->numberBetween(1,10),
            'nationality' => $this->faker->countryCode,
            'status' => $this->faker->randomElement(['Active', 'Inactive']), // get rid of one//emp_status
            'job_id' => $this->faker->numberBetween(1, 5),
            'position_id'=>$this->faker->numberBetween(1,8),
            'email_verified_at' => $this->faker->dateTimeThisDecade,
            'password' => Hash::make('password'),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
