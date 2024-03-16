<?php

namespace App\Filament\Scraper\Resources\Udemy\UdemyCourseResource\Pages;

use App\Filament\Scraper\Resources\Udemy\UdemyCourseResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUdemyCourse extends CreateRecord
{
    protected static string $resource = UdemyCourseResource::class;
}
