<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = [
        'event_category_id',
        'date',
        'time',
        'description',
        'summary',
        'entry_cost',
    ];

    public function category(){
        return $this->belongsTo(Event_category::class, 'event_category_id');
    }

    

    use HasFactory;
}
