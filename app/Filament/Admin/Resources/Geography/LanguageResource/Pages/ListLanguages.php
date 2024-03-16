<?php

namespace App\Filament\Admin\Resources\Geography\LanguageResource\Pages;

use App\Filament\Admin\Resources\Geography\LanguageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLanguages extends ListRecords
{
    protected static string $resource = LanguageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
