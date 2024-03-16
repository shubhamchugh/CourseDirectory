<?php

namespace App\Filament\Scraper\Resources\Udemy\UdemyCourseResource\Pages;

use App\Filament\Scraper\Resources\Udemy\UdemyCourseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUdemyCourse extends EditRecord
{
    protected static string $resource = UdemyCourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
