<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student; // Adjust this path if your model is located elsewhere
use Faker\Factory as Faker;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) { // Generates 50 dummy students
            Student::create([
                'name' => $faker->name,
                'age' => $faker->numberBetween(18, 25), // Generate random ages between 18 and 25
            ]);
        }
    }
}
