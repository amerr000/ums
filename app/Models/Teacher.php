<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Teacher extends Model
{
    use HasFactory, hasApiTokens;

    public function classes()
    {
        return $this->hasMany(Uniclass::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_teacher', 'teacher_id', 'student_id');
    }

}
