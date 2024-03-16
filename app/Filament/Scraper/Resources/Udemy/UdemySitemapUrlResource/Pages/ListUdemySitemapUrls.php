<?php

namespace App\Filament\Scraper\Resources\Udemy\UdemySitemapUrlResource\Pages;

use App\Filament\Scraper\Resources\Udemy\UdemySitemapUrlResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUdemySitemapUrls extends ListRecords
{
    protected static string $resource = UdemySitemapUrlResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
