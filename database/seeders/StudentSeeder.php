<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Generate 50 dummy students
        for ($i = 0; $i < 10; $i++) {
            Student::create([
                'name' => $faker->name,
                'age' => $faker->numberBetween(18, 50), // Random age between 6 and 18
            ]);
        }
    }
}
