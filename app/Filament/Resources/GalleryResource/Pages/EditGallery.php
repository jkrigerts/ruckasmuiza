<?php

namespace App\Filament\Resources\GalleryResource\Pages;

use App\Filament\Resources\GalleryResource;
use Filament\Actions;
use App\Models\Gallery; 
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;

class EditGallery extends EditRecord
{
    protected static string $resource = GalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
              ->after(function (Gallery $record) {
                if ($record->thumbnail) {
                    Storage::disk('public')->delete($record->thumbnail);
                }
                // delete multiple
                if ($record->images) {
                    foreach ($record->images as $image) Storage::disk('public')->delete($image);
                 }
              }),
           ];
    }
}
