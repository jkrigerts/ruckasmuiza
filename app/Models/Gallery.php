<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Gallery extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'description', 'date', 'file_name'];
    protected $casts = [
        'file_name' => 'json',
    ];

    protected static function boot()
    {
        parent::boot();

        static::updating(function ($model) {
            if ($model->isDirty('file_name')) {
                $originalFileNames = $model->getOriginal('file_name') ?? [];
                $updatedFileNames = $model->file_name ?? [];
                
                $deletedFileNames = array_diff($originalFileNames, $updatedFileNames);
                
                foreach ($deletedFileNames as $fileName) {
                    Storage::disk('public')->delete($fileName);
                }
            }
        });
    }
}
