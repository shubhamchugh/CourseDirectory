<?php

namespace App\Filament\SuperAdmin\Resources\Course\CourseResource\Components;

use App\Enums\Course\CourseDurationEnum;
use App\Enums\Course\CourseFormatEnum;
use App\Enums\Course\CourseGroupEnum;
use App\Enums\Course\CourseLevelEnum;
use App\Enums\Course\CourseTypeEnum;
use App\Enums\PublishStatusEnum;
use Camya\Filament\Forms\Components\TitleWithSlugInput;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Get;
use Filament\Forms\Set;
use FilamentTiptapEditor\TiptapEditor;
use Illuminate\Support\HtmlString;

class CourseForm
{
    public static function get()
    {
        return [
            Grid::make(4)
                ->schema([

                    TitleWithSlugInput::make(
                        fieldTitle: 'title',
                        fieldSlug: 'slug',
                    )->columnSpan(4),

                    TiptapEditor::make('description')->columnSpan(4),

                ])->columnSpan(3),

            Section::make('Publish Status')
                ->schema([

                    DateTimePicker::make('published_at')
                        ->reactive()
                        ->afterStateUpdated(function (Set $set, $state) {
                            if ($state >= now()) {
                                return $set('status', PublishStatusEnum::SCHEDULED->value);
                            }

                            return $set('status', PublishStatusEnum::PUBLISHED->value);
                        })
                        ->required()
                        ->native(false)
                        ->hint(function ($component) {
                            $hint = '<div class="flex flex-wrap space-x-2">';

                            $dates = [
                                [
                                    'label' => 'Now',
                                    'value' => now(),
                                ],
                                [
                                    'label' => '+1d',
                                    'value' => now()->addDay(),
                                ],

                            ];

                            foreach ($dates as $date) {
                                $hint .= '
                    <span wire:click="$set(\''.$component->getStatePath().'\', \''.$date['value'].'\')" class="font-medium px-2 py-0.5 rounded-xl bg-primary-500 text-white text-xs tracking-tight mt-[10px] cursor-pointer">
                        '.$date['label'].'
                    </span>
                    ';
                            }

                            $hint .= '</div>';

                            return new HtmlString($hint);
                        }),

                    Select::make('status')->options(
                        function (Get $get) {
                            $date = $get('published_at');
                            if ($date >= now()) {
                                return PublishStatusEnum::getScheduledOptions();
                            }

                            return PublishStatusEnum::getPublishedOptions();
                        }
                    )->reactive()->required(),

                    Toggle::make('is_featured'),

                    Toggle::make('is_certificate'),

                    Toggle::make('has_exercises'),

                    Select::make('Instructor')
                        ->label('Course Instructor')
                        ->relationship('instructor', 'name')
                        ->searchable()
                        ->multiple()
                        ->placeholder('Select an Instructor'),

                    Hidden::make('user_id')
                        ->default(auth()->user()->id),

                ])->columnSpan(1),

            Section::make('Geo')->schema([
                Select::make('Captions')
                    ->label('Course Captions')
                    ->multiple()
                    ->relationship('captions', 'name')
                    ->searchable()
                    ->preload()
                    ->loadingMessage('Loading Languages...')
                    ->searchingMessage('Searching Languages...')
                    ->noSearchResultsMessage('No Language found.')
                    ->optionsLimit(5),

                Select::make('Language')
                    ->label('Course Language')
                    ->multiple()
                    ->relationship('languages', 'name')
                    ->searchable()
                    ->preload()
                    ->loadingMessage('Loading Languages...')
                    ->searchingMessage('Searching Languages...')
                    ->noSearchResultsMessage('No Language found.')
                    ->optionsLimit(5),
            ])->columnSpan(1),

            Section::make('Type')
                ->schema([
                    Select::make('type')
                        ->options(CourseTypeEnum::getSelectOptions()),

                    Select::make('group')
                        ->options(CourseGroupEnum::getSelectOptions()),

                    Select::make('level')
                        ->options(CourseLevelEnum::getSelectOptions()),
                ])->columnSpan(1),

            Section::make('Duration')
                ->schema([
                    Select::make('format')
                        ->options(CourseFormatEnum::getSelectOptions()),

                    TextInput::make('expected_duration')
                        ->numeric()
                        ->inputMode('decimal')
                        ->visible(fn (Get $get) => $get('expected_duration_unit') !== null && $get('expected_duration_unit') !== ''),

                    Select::make('expected_duration_unit')
                        ->options(CourseDurationEnum::getSelectOptions())
                        ->live(),
                ])->columnSpan(1),

            Section::make('Partners')
                ->schema([

                    Select::make('institution_id')
                        ->label('Select Institution')
                        ->relationship('institution', 'name')
                        ->searchable()
                        ->placeholder('Choose a Institution'),

                    Select::make('university_id')
                        ->label('Select University')
                        ->relationship('university', 'name')
                        ->searchable()
                        ->placeholder('Choose a University'),

                    Select::make('platform_id')
                        ->label('Select Platform')
                        ->relationship('platform', 'name')
                        ->searchable()
                        ->placeholder('Choose a Platform'),
                ])
                ->columnSpan(1),
        ];
    }
}
