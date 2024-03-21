<?php

namespace App\Http\Controllers\Frontend\Course;

use App\Http\Controllers\Controller;
use App\Models\Course\Course;

class CourseListController extends Controller
{
    public function index()
    {
        $courses = Course::where('group', 'course')->paginate(10);

        return view('edublink.content.course.lists.index', ['courses' => $courses]);
    }
}
