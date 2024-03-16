<?php

namespace Database\Seeders\Course;

use App\Models\Course\Course;
use App\Models\Course\Instructor;
use App\Models\Geography\Language;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create courses and attach each to a random set of languages
        Course::factory(10)->create()->each(function ($course) {

            // Assuming each course can have 1 to 3 languages, instructor
            $languages = Language::inRandomOrder()->take(rand(1, 3))->pluck('id');
            $instructor = Instructor::inRandomOrder()->take(rand(1, 3))->pluck('id');

            $course->languages()->attach($languages);
            $course->captions()->attach($languages);
            $course->instructor()->attach($instructor);
        });
    }
}
