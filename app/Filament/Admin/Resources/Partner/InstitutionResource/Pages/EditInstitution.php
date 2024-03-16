<?php

namespace App\Filament\Admin\Resources\Partner\InstitutionResource\Pages;

use App\Filament\Admin\Resources\Partner\InstitutionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInstitution extends EditRecord
{
    protected static string $resource = InstitutionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
