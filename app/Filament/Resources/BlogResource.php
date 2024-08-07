<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Filters\SelectFilter;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;
    protected static ?string $navigationIcon = "heroicon-o-chat-bubble-oval-left-ellipsis";

    protected static ?string $modelLabel = 'Ieraksts';
    protected static ?string $pluralModelLabel = 'Muiža runā';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make("title")->required()
                ->label("Virsraksts"),
                Select::make("section_id")
                ->label("Sadaļa")
                ->options(Section::all()->pluck("name", "id"))
                ->required(),
            Select::make("blog_category_id")
                ->label("Kategorija")
                ->options(BlogCategory::all()->pluck("name", "id"))
                ->native(false),
            RichEditor::make("content")
                ->label("Saturs")
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
            FileUpload::make("image")
                ->label("Attēls")
                ->required(),
            Checkbox::make("published")
                ->label("Publicēt")
                ->default(false)
        ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("title")->label('Virsraksts')->sortable(),
                Tables\Columns\TextColumn::make("section.name")->label('Sadaļa'),
                Tables\Columns\TextColumn::make('blogCategory.name')
                    ->label('Kategorija')
                    ->sortable(),
                ImageColumn::make("image")->label('Attēls'),
                Tables\Columns\TextColumn::make("created_at")
                    ->label('Izveides laiks')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
                Tables\Columns\TextColumn::make("updated_at")
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\CheckboxColumn::make("published")
                    ->label("Publicēts")
            ])
            ->filters([
                SelectFilter::make('blog_category_id')
                    ->label("Kategorija")
                    ->searchable()
                    ->preload()
                    ->indicator('Kategorija')
                    ->relationship('blogCategory', 'name'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            "index" => Pages\ListBlogs::route("/"),
            "create" => Pages\CreateBlog::route("/create"),
            "view" => Pages\ViewBlog::route("/{record}"),
            "edit" => Pages\EditBlog::route("/{record}/edit"),
        ];
    }
}
