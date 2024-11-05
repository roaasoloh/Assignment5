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

        // Generate 20 dummy students
        foreach (range(1, 20) as $index) {
            Student::create([
                'name' => $faker->name, // Random full name
                'age' => $faker->numberBetween(18, 25), // Random age between 18 and 25
            ]);
        }
    }
}
