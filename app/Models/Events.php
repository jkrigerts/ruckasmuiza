<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Events extends Model
{
    protected $fillable = [
        'type_id',
        'title',
        'titleLong',
        'time',
        'happens_at',
        'info',
        'infoLong',
        'price',
    ];

    protected $casts = [
        'published' => 'boolean',
    ];
    
    public function type(){
        return $this->belongsTo(\App\Models\Type::class);
    }

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function eventSignups(): HasMany
    {
        return $this->hasMany(EventSignup::class);
    }

    use HasFactory;
}
