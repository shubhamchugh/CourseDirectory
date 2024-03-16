<?php

namespace Database\Seeders\Course;

use App\Models\Course\CourseReview;
use Illuminate\Database\Seeder;

class CourseReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CourseReview::factory()->count(10)->create();
    }
}
