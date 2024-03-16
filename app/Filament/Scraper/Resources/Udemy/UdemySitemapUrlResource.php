<?php

namespace App\Filament\Scraper\Resources\Udemy;

use App\Filament\Scraper\Resources\Udemy\UdemySitemapUrlResource\Pages;
use App\Filament\Scraper\Resources\Udemy\UdemySitemapUrlResource\RelationManagers;
use App\Models\Udemy\UdemySitemapUrl;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UdemySitemapUrlResource extends Resource
{
    protected static ?string $model = UdemySitemapUrl::class;

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
            'index' => Pages\ListUdemySitemapUrls::route('/'),
            'create' => Pages\CreateUdemySitemapUrl::route('/create'),
            'edit' => Pages\EditUdemySitemapUrl::route('/{record}/edit'),
        ];
    }
}
