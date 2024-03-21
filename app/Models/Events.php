<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    
    public function type(){
        return $this->belongsTo(\App\Models\Type::class);
    }

    use HasFactory;
}
