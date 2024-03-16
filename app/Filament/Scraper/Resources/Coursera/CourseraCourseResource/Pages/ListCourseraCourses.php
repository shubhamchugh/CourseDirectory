<?php

namespace App\Filament\Scraper\Resources\Coursera\CourseraCourseResource\Pages;

use App\Filament\Scraper\Resources\Coursera\CourseraCourseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCourseraCourses extends ListRecords
{
    protected static string $resource = CourseraCourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
