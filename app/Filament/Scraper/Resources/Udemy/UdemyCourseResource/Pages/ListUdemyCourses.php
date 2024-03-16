<?php

namespace App\Filament\Scraper\Resources\Udemy\UdemyCourseResource\Pages;

use App\Filament\Scraper\Resources\Udemy\UdemyCourseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUdemyCourses extends ListRecords
{
    protected static string $resource = UdemyCourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
