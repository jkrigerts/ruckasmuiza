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
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\RichEditor;

class EventsResource extends Resource
{
    protected static ?string $model = Events::class;
    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    
    protected static ?string $modelLabel = 'Pasākums';
    protected static ?string $pluralModelLabel = 'Pasākumi';
    protected static ?int $navigationSort = 1;

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
                            ->label('Laiks')
                            ->required()
                            ->maxLength(50)
                            ->placeholder('12:30 - 14:00'),
                        TextInput::make('timeLong')
                            ->label('Laiks uznirstošajā logā')
                            ->maxLength(100)
                            ->placeholder('10:00 (3 - 5 gadi) / 11:30 (6 - 9 gadi)'),
                    ]),

                Section::make('Informācija')
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                    ])
                    ->description('Ievadiet informāciju par jauno afišu')
                    ->schema([
                        TextInput::make('title')
                            ->label('Virsraksts')
                            ->required()
                            ->maxLength(100),
                        TextInput::make('info')
                            ->label('Kopsavilkums')
                            ->required()
                            ->maxLength(100)
                            ->placeholder('Kino vakars ar popkornu'),
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
                        Textarea::make('infoLong')
                            ->label('Apraksts uznirstošajā logā')
                            ->autosize()
                            ->columnSpanFull()
                            ->placeholder('Harija Potera fanu kluba kino vakars ar popkornu skolas vecuma bērniem.')
                            ->maxLength(255),
                        RichEditor::make('price')
                            ->required()
                            ->label('Dalības maksa')
                            ->columnSpanFull()
                            ->maxLength(500)
                            ->placeholder('5')
                            ->extraInputAttributes(['style' => 'min-height: 100px; max-height: 100px; overflow-y: auto;'])
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'link',
                            ]),
                        Checkbox::make("reservation_needed")
                            ->label("Iepriekšēja pieteikšanās")
                            ->default(true),
                        Checkbox::make("published")
                            ->label("Publicēt")
                            ->default(true)
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
                    ->searchable(),
                Tables\Columns\TextColumn::make('happens_at')
                    ->label('Datums')
                    ->date(),
                Tables\Columns\TextColumn::make('time')
                    ->label('Laiks/Laiki')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('price')
                //     ->label('Cena')
                //     ->searchable(),
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
                Tables\Columns\CheckboxColumn::make("published")
                    ->label("Publicēts")
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
                    ->label("Kategorija")
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
