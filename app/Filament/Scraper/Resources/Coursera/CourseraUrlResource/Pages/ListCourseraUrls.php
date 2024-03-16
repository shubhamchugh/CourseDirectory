<?php

namespace App\Filament\Scraper\Resources\Coursera\CourseraUrlResource\Pages;

use App\Filament\Scraper\Resources\Coursera\CourseraUrlResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCourseraUrls extends ListRecords
{
    protected static string $resource = CourseraUrlResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
