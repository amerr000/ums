<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Uniclass extends Model
{
    use HasFactory;

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    
    // the uniclass has two many to many relationships with the student 
    // 1. the first one is the students that are enrolled in the class
    // 2. the second one is the students that are absent/attended the class
    //so we need to define two relationships now for the university classes

    // the first relationship is the students that are enrolled in the class
    public function studentEnrolled(){
        return $this->belongsToMany(Student::class, 'student_uniclass_enroll', 'uniclass_id', 'student_id');
    }
    //this means that the uniclass model has a many to many relationship with the student model through the student_uniclass pivot table based on the uniclass_id and student_id columns


//the second relationship now we want to write is the students that are absent/attended the class


public function studentAttendances(){
    return $this->belongsToMany(Student::class, 'student_uniclass', 'uniclass_id', 'student_id')
    ->withPivot('status', 'date', 'absence_cause')
    ->withTimestamps();
}


}