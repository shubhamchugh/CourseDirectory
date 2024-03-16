<?php

namespace App\Filament\Scraper\Resources\Udemy\UdemySitemapUrlResource\Pages;

use App\Filament\Scraper\Resources\Udemy\UdemySitemapUrlResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUdemySitemapUrl extends EditRecord
{
    protected static string $resource = UdemySitemapUrlResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
