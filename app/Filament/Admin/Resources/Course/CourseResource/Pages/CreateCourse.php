<?php

namespace App\Filament\Admin\Resources\Course\CourseResource\Pages;

use App\Filament\Admin\Resources\Course\CourseResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCourse extends CreateRecord
{
    protected static string $resource = CourseResource::class;
}
