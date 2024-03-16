<?php

namespace App\Filament\Admin\Resources\Course\InstructorResource\Pages;

use App\Filament\Admin\Resources\Course\InstructorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInstructor extends EditRecord
{
    protected static string $resource = InstructorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}