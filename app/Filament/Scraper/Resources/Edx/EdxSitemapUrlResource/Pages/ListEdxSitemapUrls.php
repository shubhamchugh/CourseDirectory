<?php

namespace App\Filament\Scraper\Resources\Edx\EdxSitemapUrlResource\Pages;

use App\Filament\Scraper\Resources\Edx\EdxSitemapUrlResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEdxSitemapUrls extends ListRecords
{
    protected static string $resource = EdxSitemapUrlResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
