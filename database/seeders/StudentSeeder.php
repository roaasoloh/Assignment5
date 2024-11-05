<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student; // Ensure to import your Student model
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            Student::create([
                'name' => $faker->name,
                'age' => $faker->numberBetween(18, 25), // Random age between 18 and 25
            ]);
        }
    }
}
