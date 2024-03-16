<?php

namespace App\Filament\Admin\Resources\Geography\SubRegionResource\Pages;

use App\Filament\Admin\Resources\Geography\SubRegionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSubRegions extends ListRecords
{
    protected static string $resource = SubRegionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
