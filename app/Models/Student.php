<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'university_id',
        'study_mode',
        'nationality',
        'email',
        'gender',
        'age',
        'phone_number',
        'note'
    ];

    public function classesEnrolled()
    {
        return $this->belongsToMany(Uniclass::class, 'student_uniclass_enroll', 'student_id', 'uniclass_id');
    }

    public function classesAttended()
    {
        return $this->belongsToMany(Uniclass::class, 'student_uniclass', 'student_id', 'uniclass_id')
            ->withPivot('status', 'date', 'absence_cause')
            ->withTimestamps();
    }
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'student_teacher', 'student_id', 'teacher_id');
    }


    
}
