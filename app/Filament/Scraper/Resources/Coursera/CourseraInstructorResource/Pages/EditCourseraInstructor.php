<?php

namespace App\Filament\Scraper\Resources\Coursera\CourseraInstructorResource\Pages;

use App\Filament\Scraper\Resources\Coursera\CourseraInstructorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCourseraInstructor extends EditRecord
{
    protected static string $resource = CourseraInstructorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
