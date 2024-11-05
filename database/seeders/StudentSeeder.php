<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Student;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    
    public function run(): void
    {
        
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            Student::create([
                'name' => $faker->name,
                'age' => $faker->numberBetween(10, 21),
            ]);
        }
    }
}

