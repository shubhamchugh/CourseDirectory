<?php

namespace App\Filament\Scraper\Resources\Coursera\CourseraCourseResource\Pages;

use App\Filament\Scraper\Resources\Coursera\CourseraCourseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCourseraCourse extends EditRecord
{
    protected static string $resource = CourseraCourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
