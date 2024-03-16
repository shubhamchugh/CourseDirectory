<?php

namespace App\Filament\Scraper\Resources\Edx\EdxCourseResource\Pages;

use App\Filament\Scraper\Resources\Edx\EdxCourseResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEdxCourse extends CreateRecord
{
    protected static string $resource = EdxCourseResource::class;
}
