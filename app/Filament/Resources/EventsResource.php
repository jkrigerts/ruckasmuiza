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
use Filament\Forms\Components\FileUpload;
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
                Section::make('Vispārēji')
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                    ])
                    ->description('Ievadiet kopējo informāciju par pasākumu')
                    ->schema([
                        TextInput::make('title')
                        ->label('Virsraksts')
                        ->placeholder('Picas detektīvs')
                        ->required()
                        ->columnSpanFull()
                        ->maxLength(100),
                    TextInput::make('info')
                        ->label('Kopsavilkums')
                        ->required()
                        ->maxLength(100)
                        ->placeholder('Aizraujošs pasākums bērniem'),
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
                        FileUpload::make('image')
                            ->label('Reprezentējošs attēls')
                            ->columnSpanFull(),
                        Checkbox::make("pinned")
                            ->label("Izcelt")
                            ->default(false),
                        Checkbox::make("published")
                            ->label("Publicēt")
                            ->default(true)
                    ]),

                Section::make('Viena ieraksta skats')
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                    ])
                    ->description('Ievadiet informāciju viena ieraksta skatam')
                    ->schema([

                        RichEditor::make('infoLong')
                            ->label('Īss ievads: kam, cik maksā, cik ilgi?')
                            ->required()
                            ->placeholder("Vecums: 5 - 10 gadi. Ilgums: 2 stundas")
                            ->columnSpanFull()
                            ->maxLength(50000)
                            ->toolbarButtons([
                                "blockquote",
                                "bold",
                                "bulletList",
                                "h2",
                                "h3",
                                "italic",
                                "link",
                                "orderedList",
                                "redo",
                                "strike",
                                "underline",
                                "undo",
                            ]),
                        RichEditor::make('description')
                            ->required()
                            ->label('Pasākuma apraksts')
                            ->columnSpanFull()
                            ->maxLength(50000)
                            ->toolbarButtons([
                                "blockquote",
                                "bold",
                                "bulletList",
                                "h2",
                                "h3",
                                "italic",
                                "link",
                                "orderedList",
                                "redo",
                                "strike",
                                "underline",
                                "undo",
                            ]),
                        RichEditor::make('notes')
                            ->label('Piezīmes')
                            ->placeholder("Pasākuma laikā tiks fotografēts")
                            ->columnSpanFull()
                            ->maxLength(2000)
                            ->extraInputAttributes(['style' => 'min-height: 100px; max-height: 100px; overflow-y: auto;'])
                            ->toolbarButtons([
                                "bold",
                                "bulletList",
                                "italic",
                                "link",
                                "orderedList",
                                "redo",
                                "strike",
                                "underline",
                                "undo",
                            ]),
        
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
                    ->label('Laiks')
                    ->searchable(),
  
                Tables\Columns\CheckboxColumn::make("published")
                    ->label("Publicēts"),
                Tables\Columns\CheckboxColumn::make("pinned")
                    ->label("Izcelts")
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
