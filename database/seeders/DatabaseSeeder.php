<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Tax;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(UserSeeder::class);
        $this->call(DepartmentSeeder::class);
        // $this->call(Tax::class);
        $this->call(PayRollSeeder::class);
        $this->call(PayrollSettingSeeder::class);
        $this->call(PositionSeeder::class);
        $this->call(TrainingProgramSeeder::class);
        $this->call(ProjectSeeder::class);
    }
}
