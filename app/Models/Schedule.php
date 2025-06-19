<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = ['day_of_week', 'time_slot', 'room', 'term'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
