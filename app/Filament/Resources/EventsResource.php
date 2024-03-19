<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventsResource\Pages;
use App\Filament\Resources\EventsResource\RelationManagers;
use App\Models\Event_category;
use App\Models\Events;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;
use Filament\Tables\Filters\QueryBuilder\Constraints\DateConstraint;

class EventsResource extends Resource
{
    protected static ?string $model = Events::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationGroup = 'Afišas';

    protected static ?string $modelLabel = 'Afiša';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Laiks')
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                    ])
                    ->description('Norādiet datumu un laiku kad notiks pasākums.')
                    ->schema([
                        DatePicker::make('date')
                            ->label('Datums')
                            ->native(false)
                            ->placeholder('Aug 23, 2021')
                            ->required()
                            ->minDate(now()),
                        TextInput::make('time')
                            ->label('Laiks/laiki')
                            ->required()
                            ->maxLength(50)
                            ->placeholder('12:30 - 14:00'),
                    ]),

                Section::make('Informācija')
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                    ])
                    ->description('Norādiet pārējo informāciju par pasākumu')
                    ->schema([
                        Textarea::make('description')
                            ->label('Apraksts')
                            ->required()
                            ->autosize()
                            ->placeholder('Harija Potera fanu kluba kino vakars ar popkornu skolas vecuma bērniem.')
                            ->maxLength(255),
                        TextInput::make('summary')
                            ->label('Īsais apraksts')
                            ->required()
                            ->maxLength(45)
                            ->placeholder('kino vakars ar popkornu'),
        
                        Select::make('event_category_id')
                            ->label('Kategorija')
                            ->native(false)
                            ->searchable(['name'])
                            ->preload()
                            ->relationship('category', 'name'), // TODO: create custom options, where it also shows the category color
                        TextInput::make('entry_cost')
                            ->label('Dalības maksa')
                            ->required()
                            ->numeric()
                            ->suffix('EUR')
                            ->placeholder('5'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('time')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('summary')
                    ->searchable(),
                Tables\Columns\TextColumn::make('entry_cost')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([ // TODO: Add filter for dates and prices
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvents::route('/create'),
            'edit' => Pages\EditEvents::route('/{record}/edit'),
        ];
    }
}
