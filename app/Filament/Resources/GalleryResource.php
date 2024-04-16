<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Filament\Resources\GalleryResource\RelationManagers;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $modelLabel = 'Galerija';
    protected static ?string $pluralModelLabel = 'Galerijas';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\TextInput::make('title')
                        ->label('Virsraksts')
                        ->required(),
                Forms\Components\Textarea::make('description')
                        ->label('Apraksts')
                        ->required(),
                Forms\Components\FileUpload::make('thumbnail')
                        ->label('Reprezentējošais attēls')
                        ->required(),
                Forms\Components\FileUpload::make('images')
                        ->multiple()
                        ->reorderable()
                        ->appendFiles()
                        ->required()
                        ->label('Attēli galerijā'),
            ])
            ->columns([12]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Virsraksts'),
                Tables\Columns\TextColumn::make('description')->label('Apraksts'),
                Tables\Columns\ImageColumn::make('thumbnail')->label('Attēls'),
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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
