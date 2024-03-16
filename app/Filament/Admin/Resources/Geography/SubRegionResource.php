<?php

namespace App\Filament\Admin\Resources\Geography;

use App\Filament\Admin\Resources\Geography\SubRegionResource\Pages;
use App\Models\Geography\SubRegion;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SubRegionResource extends Resource
{
    protected static ?string $model = SubRegion::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Geography';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('wikiDataId'),
                KeyValue::make('translations'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('wikiDataId'),
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
            'index' => Pages\ListSubRegions::route('/'),
            'create' => Pages\CreateSubRegion::route('/create'),
            'edit' => Pages\EditSubRegion::route('/{record}/edit'),
        ];
    }
}
