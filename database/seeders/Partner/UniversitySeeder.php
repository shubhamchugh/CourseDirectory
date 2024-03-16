<?php

namespace Database\Seeders\Partner;

use App\Models\Partner\University;
use Illuminate\Database\Seeder;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 10 university records
        University::factory(10)->create();
    }
}
