<?php

namespace Database\Seeders;

use App\Models\PayRoll;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PayRollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PayRoll::factory()->count(10)->create();
    }
}
