<?php

namespace Database\Seeders\Course;

use App\Models\Course\Instructor;
use Illuminate\Database\Seeder;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Instructor::factory(10)->create();
    }
}
