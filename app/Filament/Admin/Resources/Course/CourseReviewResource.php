<?php

namespace App\Filament\Admin\Resources\Course;

use App\Filament\Admin\Resources\Course\CourseReviewResource\Pages;
use App\Models\Course\CourseReview;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CourseReviewResource extends Resource
{
    protected static ?string $model = CourseReview::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Course';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
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
            'index' => Pages\ListCourseReviews::route('/'),
            'create' => Pages\CreateCourseReview::route('/create'),
            'edit' => Pages\EditCourseReview::route('/{record}/edit'),
        ];
    }
}
