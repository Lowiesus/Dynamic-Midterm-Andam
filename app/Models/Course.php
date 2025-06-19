<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
        use HasFactory;
        
        public function students() {
        return $this->belongsToMany(Student::class, 'class_student');
    }

    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }

    public function schedule() {
        return $this->hasOne(Schedule::class);
    }
}
