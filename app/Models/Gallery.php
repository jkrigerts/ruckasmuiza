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
        'images' => 'json',
    ];
}
