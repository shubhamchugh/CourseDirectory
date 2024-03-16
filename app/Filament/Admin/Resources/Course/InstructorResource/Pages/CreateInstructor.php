<?php

namespace App\Filament\Admin\Resources\Course\InstructorResource\Pages;

use App\Filament\Admin\Resources\Course\InstructorResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInstructor extends CreateRecord
{
    protected static string $resource = InstructorResource::class;
}
