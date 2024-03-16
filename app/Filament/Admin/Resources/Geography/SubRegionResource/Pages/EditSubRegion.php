<?php

namespace App\Filament\Admin\Resources\Geography\SubRegionResource\Pages;

use App\Filament\Admin\Resources\Geography\SubRegionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubRegion extends EditRecord
{
    protected static string $resource = SubRegionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
