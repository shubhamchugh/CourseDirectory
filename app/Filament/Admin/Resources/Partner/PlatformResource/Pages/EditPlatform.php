<?php

namespace App\Filament\Admin\Resources\Partner\PlatformResource\Pages;

use App\Filament\Admin\Resources\Partner\PlatformResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlatform extends EditRecord
{
    protected static string $resource = PlatformResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
