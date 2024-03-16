<?php

namespace App\Filament\Scraper\Resources\Edx\EdxUrlResource\Pages;

use App\Filament\Scraper\Resources\Edx\EdxUrlResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEdxUrl extends EditRecord
{
    protected static string $resource = EdxUrlResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
