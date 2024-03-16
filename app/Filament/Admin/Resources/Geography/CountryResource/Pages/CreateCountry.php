<?php

namespace App\Filament\Admin\Resources\Geography\CountryResource\Pages;

use App\Filament\Admin\Resources\Geography\CountryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCountry extends CreateRecord
{
    protected static string $resource = CountryResource::class;
}
