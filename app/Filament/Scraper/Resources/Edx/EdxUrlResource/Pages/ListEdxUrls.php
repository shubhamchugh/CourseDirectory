<?php

namespace App\Filament\Scraper\Resources\Edx\EdxUrlResource\Pages;

use App\Filament\Scraper\Resources\Edx\EdxUrlResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEdxUrls extends ListRecords
{
    protected static string $resource = EdxUrlResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
