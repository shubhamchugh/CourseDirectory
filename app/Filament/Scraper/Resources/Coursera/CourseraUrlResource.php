<?php

namespace App\Filament\Scraper\Resources\Coursera;

use App\Filament\Scraper\Resources\Coursera\CourseraUrlResource\Pages;
use App\Models\Scraper\Coursera\CourseraUrl;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CourseraUrlResource extends Resource
{
    protected static ?string $model = CourseraUrl::class;

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
            'index' => Pages\ListCourseraUrls::route('/'),
            'create' => Pages\CreateCourseraUrl::route('/create'),
            'edit' => Pages\EditCourseraUrl::route('/{record}/edit'),
        ];
    }
}
