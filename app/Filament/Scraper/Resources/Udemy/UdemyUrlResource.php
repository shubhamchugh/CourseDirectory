<?php

namespace App\Filament\Scraper\Resources\Udemy;

use App\Filament\Scraper\Resources\Udemy\UdemyUrlResource\Pages;
use App\Filament\Scraper\Resources\Udemy\UdemyUrlResource\RelationManagers;
use App\Models\Udemy\UdemyUrl;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UdemyUrlResource extends Resource
{
    protected static ?string $model = UdemyUrl::class;

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
            'index' => Pages\ListUdemyUrls::route('/'),
            'create' => Pages\CreateUdemyUrl::route('/create'),
            'edit' => Pages\EditUdemyUrl::route('/{record}/edit'),
        ];
    }
}
