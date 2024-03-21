<?php

namespace App\Http\Controllers\Frontend\Course;

use App\Http\Controllers\Controller;
use App\Models\Course\Course;

class CourseDetailController extends Controller
{
    public function show($slug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();

        return view('edublink.content.course.details.index', ['course' => $course]);
    }
}
