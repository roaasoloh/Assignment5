<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(); // Initialize Faker
        for ($i = 0; $i < 10; $i++) {
            Student::create([
                'name' => $faker->name,
                'age' => $faker->numberBetween(18, 25)
            ]);
    }
}
}