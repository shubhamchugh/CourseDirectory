<?php

namespace App\Filament\Scraper\Resources\Udemy\UdemyUrlResource\Pages;

use App\Filament\Scraper\Resources\Udemy\UdemyUrlResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUdemyUrl extends EditRecord
{
    protected static string $resource = UdemyUrlResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
