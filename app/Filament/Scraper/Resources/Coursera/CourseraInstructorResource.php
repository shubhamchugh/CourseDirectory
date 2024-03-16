<?php

namespace App\Filament\Scraper\Resources\Coursera;

use App\Filament\Scraper\Resources\Coursera\CourseraInstructorResource\Pages;
use App\Models\Scraper\Coursera\CourseraInstructor;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CourseraInstructorResource extends Resource
{
    protected static ?string $model = CourseraInstructor::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Coursera';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCourseraInstructors::route('/'),
            'create' => Pages\CreateCourseraInstructor::route('/create'),
            'edit' => Pages\EditCourseraInstructor::route('/{record}/edit'),
        ];
    }
}
