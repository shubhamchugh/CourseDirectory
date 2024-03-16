<?php

namespace App\Filament\Scraper\Resources\Coursera\CourseraInstructorResource\Pages;

use App\Filament\Scraper\Resources\Coursera\CourseraInstructorResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCourseraInstructor extends CreateRecord
{
    protected static string $resource = CourseraInstructorResource::class;
}
