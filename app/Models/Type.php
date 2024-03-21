<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'name',
        'color'
    ];

    public function event(){
        return $this->hasMany(\App\Models\Events::class);
    }

    use HasFactory;
}
