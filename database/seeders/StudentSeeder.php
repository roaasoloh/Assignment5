<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Create 10 dummy students
        foreach (range(1, 10) as $index) {
            Student::create([
                'name' => $faker->name,
                'age' => $faker->numberBetween(18, 25), // Adjust age range as needed
            ]);
        }
    }
}
