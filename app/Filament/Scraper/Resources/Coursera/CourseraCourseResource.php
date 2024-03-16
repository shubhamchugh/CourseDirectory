<?php

namespace App\Filament\Scraper\Resources\Coursera;

use App\Filament\Scraper\Resources\Coursera\CourseraCourseResource\Pages;
use App\Filament\Scraper\Resources\Coursera\CourseraCourseResource\RelationManagers;
use App\Models\Coursera\CourseraCourse;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CourseraCourseResource extends Resource
{
    protected static ?string $model = CourseraCourse::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
            'index' => Pages\ListCourseraCourses::route('/'),
            'create' => Pages\CreateCourseraCourse::route('/create'),
            'edit' => Pages\EditCourseraCourse::route('/{record}/edit'),
        ];
    }
}
