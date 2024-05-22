<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $casts = [
        'published' => 'boolean',
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function blogCategory(){
        return $this->belongsTo(\App\Models\BlogCategory::class);
    }
}
