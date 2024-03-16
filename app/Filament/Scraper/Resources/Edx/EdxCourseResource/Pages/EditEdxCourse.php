<?php

namespace App\Filament\Scraper\Resources\Edx\EdxCourseResource\Pages;

use App\Filament\Scraper\Resources\Edx\EdxCourseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEdxCourse extends EditRecord
{
    protected static string $resource = EdxCourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
