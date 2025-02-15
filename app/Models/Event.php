<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_name',
        'description',
        'event_start_date_and_time',
        'event_end_date_and_time',
        'category',
        
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
