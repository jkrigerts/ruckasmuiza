<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Section;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Columns\ImageColumn;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = "heroicon-o-bars-3-center-left";

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make("title")->required(),
            Select::make("section_id")
            ->label("Blog Section")
            ->options(Section::all()->pluck("name", "id"))
            ->required()
            ->native(false),
            RichEditor::make("content")
                ->required()
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
            FileUpload::make("image")->required(),
        ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("title")->sortable(),
                Tables\Columns\TextColumn::make("section.name"),
                ImageColumn::make("image"),
                Tables\Columns\TextColumn::make("created_at")
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
                Tables\Columns\TextColumn::make("updated_at")
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            "index" => Pages\ListBlogs::route("/"),
            "create" => Pages\CreateBlog::route("/create"),
            "view" => Pages\ViewBlog::route("/{record}"),
            "edit" => Pages\EditBlog::route("/{record}/edit"),
        ];
    }
}
