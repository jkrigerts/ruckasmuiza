<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventCategoryResource\Pages;
use App\Filament\Resources\EventCategoryResource\RelationManagers;
use App\Models\Event_category;
use Filament\Forms;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class EventCategoryResource extends Resource
{
    protected static ?string $model = Event_category::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    protected static ?string $navigationLabel = 'Afišu kategorijas';

    protected static ?string $navigationGroup = 'Afišas';

    protected static ?string $modelLabel = 'Kategorijas';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Kategorija')
                    ->required()
                    ->maxLength(45)
                    ->placeholder('Bērniem'),
                ColorPicker::make('hex')
                    ->label('Hex krāsas kods')
                    ->placeholder('#FFFFFF'),
            ]);
    }

    public static function table(Table $table): Table
    { 
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Kategorija')
                    ->searchable()
                    ->sortable(),
                ColorColumn::make('hex')
                    ->label('Hex krāsas kods'),
                TextColumn::make('created_at')
                    ->toggleable()
                    ->toggledHiddenByDefault(true)
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->toggleable()
                    ->toggledHiddenByDefault(true)
                    ->sortable(),
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
            'index' => Pages\ListEventCategories::route('/'),
            'create' => Pages\CreateEventCategory::route('/create'),
            'edit' => Pages\EditEventCategory::route('/{record}/edit'),
        ];
    }
}
