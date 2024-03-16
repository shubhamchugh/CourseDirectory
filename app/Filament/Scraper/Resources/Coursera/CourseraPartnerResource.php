<?php

namespace App\Filament\Scraper\Resources\Coursera;

use App\Filament\Scraper\Resources\Coursera\CourseraPartnerResource\Pages;
use App\Models\Scraper\Coursera\CourseraPartner;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CourseraPartnerResource extends Resource
{
    protected static ?string $model = CourseraPartner::class;

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
            'index' => Pages\ListCourseraPartners::route('/'),
            'create' => Pages\CreateCourseraPartner::route('/create'),
            'edit' => Pages\EditCourseraPartner::route('/{record}/edit'),
        ];
    }
}
