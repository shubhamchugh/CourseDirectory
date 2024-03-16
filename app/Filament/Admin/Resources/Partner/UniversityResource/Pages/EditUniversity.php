<?php

namespace App\Filament\Admin\Resources\Partner\UniversityResource\Pages;

use App\Filament\Admin\Resources\Partner\UniversityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUniversity extends EditRecord
{
    protected static string $resource = UniversityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
