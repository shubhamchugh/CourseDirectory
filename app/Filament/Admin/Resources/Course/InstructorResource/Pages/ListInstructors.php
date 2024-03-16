<?php

namespace App\Filament\Admin\Resources\Course\InstructorResource\Pages;

use App\Filament\Admin\Resources\Course\InstructorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInstructors extends ListRecords
{
    protected static string $resource = InstructorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
