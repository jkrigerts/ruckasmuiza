<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // public function category()
    // {
    //     return $this->hasMany(BlogCategory::class);
    // }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
