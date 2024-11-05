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
        // Call StudentSeeder to generate 20 dummy student records
        $this->call(StudentSeeder::class);
    }
}
