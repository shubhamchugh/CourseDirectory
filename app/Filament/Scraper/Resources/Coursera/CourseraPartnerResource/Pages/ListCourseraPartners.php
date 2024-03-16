<?php

namespace App\Filament\Scraper\Resources\Coursera\CourseraPartnerResource\Pages;

use App\Filament\Scraper\Resources\Coursera\CourseraPartnerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCourseraPartners extends ListRecords
{
    protected static string $resource = CourseraPartnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
