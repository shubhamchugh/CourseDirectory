<?php

namespace App\Filament\Admin\Resources\Partner;

use App\Filament\Admin\Resources\Partner\UniversityResource\Pages;
use App\Models\Partner\University;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UniversityResource extends Resource
{
    protected static ?string $model = University::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Partner';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required()->maxLength(255),
                TextInput::make('detail_name')->maxLength(255),
                TextInput::make('web_page')->maxLength(255),
                TextInput::make('iau')->maxLength(255),
                TextInput::make('iau_url')->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->description(fn (University $record) => $record->detail_name)
                    ->words(4)
                    ->wrap(),
                TextColumn::make('web_page'),
                TextColumn::make('iau'),
                TextColumn::make('iau_url')
                    ->icon('heroicon-m-link')
                    ->iconColor('primary')
                    ->copyable()
                    ->copyMessage('Domain address copied')
                    ->copyMessageDuration(1500),
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
            'index' => Pages\ListUniversities::route('/'),
            'create' => Pages\CreateUniversity::route('/create'),
            'edit' => Pages\EditUniversity::route('/{record}/edit'),
        ];
    }
}
