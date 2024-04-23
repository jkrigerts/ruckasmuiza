<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookResource\Pages;
use App\Filament\Resources\BookResource\RelationManagers;
use App\Models\Book;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;

class BookResource extends Resource
{
    protected static ?string $model = Book::class;
    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $modelLabel = 'Grāmata';
    protected static ?string $pluralModelLabel = 'Grāmatas';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Vispārēji')
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                    ])
                    ->description('Vispārēja informācija par grāmatu')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Nosaukums')
                            ->required(),
                        Forms\Components\TextInput::make('author')
                            ->label('Autors'),
                        Forms\Components\Textarea::make('description')
                            ->label('Apraksts'),
                        Forms\Components\FileUpload::make('image')
                            ->label('Reprezentējošs attēls')
                            ->required(),
                ]),
                Section::make('Pārdošana')
                    ->columns([
                        'sm' => 1,
                        'md' => 1,
                    ])
                    ->description('Informācija par grāmatas pieejamību un cenu')
                    ->schema([
                        Forms\Components\TextInput::make('price')
                                ->label('Cena, €')
                                ->required(),
                        Forms\Components\TextInput::make('count_available')
                                ->label('Pieejamo eksemplāru skaits')
                                ->integer()
                                ->required(),
                        
                        Forms\Components\Checkbox::make("visible")
                                ->label("Redzams")->default(true)
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Nosaukums'),
                Tables\Columns\TextColumn::make('author')->label('Autors'),
                Tables\Columns\TextColumn::make('price')->label('Cena'),
                Tables\Columns\TextColumn::make('count_available')->label('Pieejams'),
                Tables\Columns\ImageColumn::make('image')->label('Attēls'),
                Tables\Columns\CheckboxColumn::make("visible")->label("Redzams"),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
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
            'index' => Pages\ListBooks::route('/'),
            'create' => Pages\CreateBook::route('/create'),
            'edit' => Pages\EditBook::route('/{record}/edit'),
        ];
    }
}
