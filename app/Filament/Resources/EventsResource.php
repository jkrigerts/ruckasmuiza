<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventsResource\Pages;
use App\Models\Events;
use Carbon\Carbon;
use Closure;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\Indicator;
use Filament\Tables\Filters\SelectFilter;

class EventsResource extends Resource
{
    protected static ?string $model = Events::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    
    protected static ?string $modelLabel = 'Afiša';

    

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Datums un laiks')
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                    ])
                    ->description('Ievadiet datumu un laiku par pasākumu')
                    ->schema([
                        DatePicker::make('happens_at')
                            ->label('Datums')
                            ->native(false)
                            ->placeholder('Aug 23, 2021')
                            ->required()
                            ->minDate(now()),
                        TextInput::make('time')
                            ->label('Laiks/Laiki')
                            ->required()
                            ->maxLength(50)
                            ->placeholder('12:30 - 14:00'),
                    ]),

                Section::make('Informācija')
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                    ])
                    ->description('Ievadiet informāciju par jauno afišu.')
                    ->schema([
                        TextInput::make('title')
                            ->label('Virsraksts')
                            ->required()
                            ->maxLength(50),
                        Textarea::make('titleLong')
                            ->label('Garš virsraksts')
                            ->required()
                            ->autosize()
                            ->maxLength(255),
                        TextInput::make('info')
                            ->label('Kopsavilkums')
                            ->required()
                            ->maxLength(50)
                            ->placeholder('Kino vakars ar popkornu'),
                        Textarea::make('infoLong')
                            ->required()
                            ->label('Apraksts')
                            ->autosize()
                            ->placeholder('Harija Potera fanu kluba kino vakars ar popkornu skolas vecuma bērniem.')
                            ->maxLength(255),
        
                        Select::make('type_id')
                            ->label('Category')
                            ->native(false)
                            ->required()
                            ->label('Kategorija')
                            ->searchable(['name'])
                            ->preload()
                            ->relationship('type', 'name') // TODO: create custom options, where it also shows the category color
                            ->createOptionForm([
                                TextInput::make('name')->required()->maxLength(50)->placeholder('Pieaugušiem'),
                                ColorPicker::make('color')->required()->placeholder('#FFFFFF'),
                            ]),
                        TextInput::make('price')
                            ->required()
                            ->label('Dalības maksa')
                            ->columnSpan(1) 
                            ->suffix('EUR')
                            ->maxLength(20)
                            ->placeholder('5'),

                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn (Builder $query) => $query->orderBy('happens_at', 'ASC'))
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Virsraksts')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type.name')
                    ->label('Kategorija')
                    ->toggleable()
                    ->toggledHiddenByDefault(),
                Tables\Columns\TextColumn::make('info')
                    ->label('Kopsavilkums')
                    ->searchable(),
                Tables\Columns\TextColumn::make('happens_at')
                    ->label('Datums')
                    ->date(),
                Tables\Columns\TextColumn::make('time')
                    ->label('Laiks/Laiki')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->label('Cena')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Uztaisīts')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->label('Atjaunots')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([ // TODO: Add filter for dates and prices
                Filter::make('happens_at')
                    ->form([
                        DatePicker::make('created_from')->label('No')->default(now()),
                        DatePicker::make('created_until')->label('Līdz'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('happens_at', '>=', $date),
                            )
                            ->when(
                                $data['created_until'],
                                fn (Builder $query, $date): Builder => $query->whereDate('happens_at', '<=', $date),
                            );
                    })
                    ->indicateUsing(function (array $data): array {
                        $indicators = [];
                        
                        if ($data['created_from'] ?? null) {
                            $indicators[] = Indicator::make('No ' . Carbon::parse($data['created_from'])->toFormattedDateString())
                                ->removeField('created_from');
                        }
                 
                        if ($data['created_until'] ?? null) {
                            $indicators[] = Indicator::make('Līdz ' . Carbon::parse($data['created_until'])->toFormattedDateString())
                                ->removeField('created_until');
                        }
                 
                        return $indicators;
                    }),
                SelectFilter::make('category_id')
                    ->searchable()
                    ->preload()
                    ->indicator('Kategorija')
                    ->relationship('type', 'name'),
            ])
            ->actions([
                ViewAction::make(),
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
