<?php

namespace Database\Seeders;

use Database\Seeders\Course\CourseReviewSeeder;
use Database\Seeders\Course\CourseSeeder;
use Database\Seeders\Course\InstructorSeeder;
use Database\Seeders\Geography\LanguageSeeder;
use Database\Seeders\Partner\InstitutionSeeder;
use Database\Seeders\Partner\PlatformSeeder;
use Database\Seeders\Partner\UniversitySeeder;
use Illuminate\Database\Seeder;

class DiscoverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            DemoCredentialsSeeder::class,
            InstructorSeeder::class,
            LanguageSeeder::class,
            UniversitySeeder::class,
            PlatformSeeder::class,
            InstitutionSeeder::class,
            CourseSeeder::class,
            CourseReviewSeeder::class,
        ]);
    }
}
