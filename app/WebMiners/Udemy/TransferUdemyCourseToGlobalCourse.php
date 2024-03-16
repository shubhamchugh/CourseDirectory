<?php

namespace App\WebMiners\Udemy;

use App\Models\Scraper\Udemy\UdemyCourse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TransferUdemyCourseToGlobalCourse
{
    public function transfer($chunkSize = 500)
    {
        UdemyCourse::chunk($chunkSize, function ($courses) {
            $globalCoursesData = $courses->map(function ($course) {

                // Prepare the course data for serialization
                $courseData = [
                    'platform_uuid' => $course->uuid,
                    'udemy_course_id' => $course->udemy_course_id,
                    'title' => $course->title,
                    'price' => $course->price,
                    'content' => $course->content,
                    'component' => $course->component,
                    'reviews' => $course->reviews,
                ];

                // Return the serialized data along with a new global UUID
                return [
                    'uuid' => Str::uuid(),
                    'platform_uuid' => $course->uuid,
                    'source' => $course->udemy_course_id,
                    'platform_name' => 'udemy',
                    'metadata' => json_encode($courseData), // Serialize the course data as JSON
                ];
            })->toArray();

            // Use DB::table()->insert() for bulk insertion
            DB::connection('mysql_scraper')->table('global_course_index')->insert($globalCoursesData);

        });
    }
}
