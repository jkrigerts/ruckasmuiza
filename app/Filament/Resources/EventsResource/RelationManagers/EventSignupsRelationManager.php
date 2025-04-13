<?php

namespace App\Filament\Resources\EventsResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Eloquent\Model;

class EventSignupsRelationManager extends RelationManager
{
    protected static string $relationship = 'eventSignups';
    protected static ?string $modelLabel = 'Apmeklētājs';
    protected static ?string $pluralModelLabel = 'Apmeklētāji';

    public static function getTitle(Model $ownerRecord, string $pageClass): string
    {
        return 'Apmeklētāji'; // Your custom title
    }


    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label("Vārds")
                    ->maxLength(255),
                Forms\Components\TextInput::make('surname')
                    ->required()
                    ->label("Uzvārds")
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->required()
                    ->email()
                    ->label("e-pasts")
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone_number')
                    ->numeric()
                    ->label("Telefona numurs")
                    ->maxLength(255),
                Forms\Components\TextInput::make('count')
                    ->numeric()
                    ->required()
                    ->default(1)
                    ->label("Apmeklētāju skaits"),
                Forms\Components\Select::make('status')
                    ->label('Statuss')
                    ->required()
                    ->options([
                        'new' => 'Jauns',
                        'pending' => 'Nosūtīts',
                        'paid' => 'Apmaksāts',
                        'cancelled' => 'Atcelts',
                    ]),
                Forms\Components\RichEditor::make('notes')
                    ->label('Piezīmes')
                    ->columnSpanFull()
                    ->maxLength(2000)
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
                
            ]);

            // $table->string("name");
            // $table->string("surname");
            // $table->string("email")->nullable();
            // $table->string("phone_number")->nullable();
            // $table->integer("count");
            // $table->string("notes", 2000)->nullable();
            // $table->string("statuss");
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('email')
            ->columns([
                Tables\Columns\TextColumn::make('email'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
