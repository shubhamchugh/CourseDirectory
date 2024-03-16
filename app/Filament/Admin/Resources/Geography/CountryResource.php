<?php

namespace App\Filament\Admin\Resources\Geography;

use App\Filament\Admin\Resources\Geography\CountryResource\Pages;
use App\Models\Geography\Country;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CountryResource extends Resource
{
    protected static ?string $model = Country::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Geography';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('iso3'),
                TextInput::make('iso2'),
                TextInput::make('numeric_code'),
                TextInput::make('phone_code'),
                TextInput::make('capital'),
                TextInput::make('currency'),
                TextInput::make('currency_name'),
                TextInput::make('currency_symbol'),
                TextInput::make('tld'),
                TextInput::make('native'),
                TextInput::make('region'),
                TextInput::make('subregion'),
                TextInput::make('nationality'),
                TextInput::make('latitude'),
                TextInput::make('longitude'),
                KeyValue::make('timezones'),
                KeyValue::make('translations'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('emoji'),
                TextColumn::make('name'),
                TextColumn::make('iso3'),
                TextColumn::make('numeric_code'),
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
            'index' => Pages\ListCountries::route('/'),
            'create' => Pages\CreateCountry::route('/create'),
            'edit' => Pages\EditCountry::route('/{record}/edit'),
        ];
    }
}
