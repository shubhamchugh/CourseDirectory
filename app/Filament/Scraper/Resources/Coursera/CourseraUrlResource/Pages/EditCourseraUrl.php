<?php

namespace App\Filament\Scraper\Resources\Coursera\CourseraUrlResource\Pages;

use App\Filament\Scraper\Resources\Coursera\CourseraUrlResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCourseraUrl extends EditRecord
{
    protected static string $resource = CourseraUrlResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
