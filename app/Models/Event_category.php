<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event_category extends Model
{
    protected $fillable = [
        'name',
        'hex'
    ];

    public function event(){
        return $this->hasMany(\App\Models\Events::class);
    }

    use HasFactory;
}
