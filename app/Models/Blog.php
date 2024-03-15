<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsToMany(BlogCategory::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
