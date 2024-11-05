<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call the StudentsTableSeeder to seed the students table
        $this->call(StudentsTableSeeder::class);
    }
}
