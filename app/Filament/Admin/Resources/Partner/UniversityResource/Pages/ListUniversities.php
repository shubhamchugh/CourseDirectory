<?php

namespace App\Filament\Admin\Resources\Partner\UniversityResource\Pages;

use App\Filament\Admin\Resources\Partner\UniversityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUniversities extends ListRecords
{
    protected static string $resource = UniversityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
