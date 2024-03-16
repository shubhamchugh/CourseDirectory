<?php

namespace Database\Seeders\Course;

use App\Models\Course\CourseType;
use Illuminate\Database\Seeder;

class CourseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CourseType::factory(10)->create();
    }
}
