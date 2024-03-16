<?php

namespace App\Filament\Scraper\Resources\Edx;

use App\Filament\Scraper\Resources\Edx\EdxSitemapUrlResource\Pages;
use App\Models\Scraper\Edx\EdxSitemapUrl;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class EdxSitemapUrlResource extends Resource
{
    protected static ?string $model = EdxSitemapUrl::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Edx';

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
            'index' => Pages\ListEdxSitemapUrls::route('/'),
            'create' => Pages\CreateEdxSitemapUrl::route('/create'),
            'edit' => Pages\EditEdxSitemapUrl::route('/{record}/edit'),
        ];
    }
}
