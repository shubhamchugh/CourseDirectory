<?php

namespace App\Filament\Admin\Resources\Geography\RegionResource\Pages;

use App\Filament\Admin\Resources\Geography\RegionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRegion extends EditRecord
{
    protected static string $resource = RegionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
