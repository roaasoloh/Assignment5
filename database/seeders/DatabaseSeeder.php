<?php

namespace Database\Seeders;

use StudentSeeder;
use App\Models\User;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            Student::create([
                'name' => $faker->name,
                'age' => $faker->numberBetween(10, 20)
            ]);
        }
    }
}
