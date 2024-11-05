<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 50) as $index) {
            Student::create([
                'name' => $faker->name,
                'age' => $faker->numberBetween(18, 30),
            ]);
        }
    }
}
