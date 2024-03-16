<?php

namespace App\Filament\Scraper\Resources\Udemy;

use App\Filament\Scraper\Resources\Udemy\UdemyCourseResource\Pages;
use App\Filament\Scraper\Resources\Udemy\UdemyCourseResource\RelationManagers;
use App\Models\Udemy\UdemyCourse;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UdemyCourseResource extends Resource
{
    protected static ?string $model = UdemyCourse::class;

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
            'index' => Pages\ListUdemyCourses::route('/'),
            'create' => Pages\CreateUdemyCourse::route('/create'),
            'edit' => Pages\EditUdemyCourse::route('/{record}/edit'),
        ];
    }
}
