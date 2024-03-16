<?php

namespace App\Filament\Scraper\Resources\Edx\EdxCourseResource\Pages;

use App\Filament\Scraper\Resources\Edx\EdxCourseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEdxCourses extends ListRecords
{
    protected static string $resource = EdxCourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
