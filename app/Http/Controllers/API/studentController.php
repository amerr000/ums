<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class studentController extends Controller
{




    //get all students of a teacher (just name gender and date of birth)
    public function index()
    {
        // Retrieve the currently authenticated user
    $teacher = auth()->user();

    // Get the list of students associated with this teacher
    $students = $teacher->students()->select('id', 'fullname','university_id','nationality')->get();
    $students->makeHidden('pivot');
        
        return response([
            'students' => $students
        ], 200);
    }


    public function showSpecificStudent($id)
    {
        // Retrieve the currently authenticated user (teacher)
        $teacher = auth()->user();
    
        // Get the student associated with this teacher
        $student = $teacher->students()->find($id);
    
        // Check if the student exists
        if (!$student) {
            return response([
                'message' => 'Student not found'
            ], 404);
        } else {
            $courseData = [];
    
            // Loop through each class the student is enrolled in
            foreach ($student->classesEnrolled()->where('archived', false)->get() as $class) {
                // Count the absences for this class
                $absencesCount = $student->classesAttended()->where('class_id', $class->id)->wherePivot('status', 'absent')->count();
                
                // Get the total number of conducted classes for this class
                $totalClassesCount = $class->students()->where('archived', false)->count(); // You can replace this with your logic for total classes
    
                $courseData[] = [
                    'class_name' => $class->class_name,
                    'absences_count' => $absencesCount,
                    'total_classes_count' => $totalClassesCount
                ];
            }
    
            return response([
                'student' => $student,
                'courses_data' => $courseData
            ], 200);
        }
    }



    //now we have to get all the students that are enrolled in a specific class of a teacher
    public function showStudentInClass($class_id){
        // Retrieve the currently authenticated user (teacher)
        $teacher = auth()->user();
    
        // Get the class associated with this teacher
        $class = $teacher->classes()->find($class_id);
    
        // Check if the class exists
        if (!$class) {
            return response([
                'message' => 'Class not found'
            ], 404);
        } else {
            $students = $class->students()->select('id', 'fullname','university_id','nationality')->get();
            return response([
                'students' => $students
            ], 200);
    }
}


public function createStudent(Request $request)
{
    // Retrieve the currently authenticated user (teacher)
    $teacher = auth()->user();
    
    // Validate the request data
    $request->validate([
        'fullname' => 'required|string',
        'university_id' => 'required|unique:students,university_id|string',
        'email' => 'required|email|unique:students,email',
        'study_mode' => 'nullable|string',
        'nationality' => 'nullable|string',
        'gender' => 'nullable|string',
        'age' => 'nullable|integer',
        'phone_number' => 'nullable|string',
    ]);

    // Create the student
    $student = $teacher->students()->create([
        'fullname' => $request->fullname,
        'university_id' => $request->university_id,
        'study_mode' => $request->study_mode,
        'nationality'=> $request->nationality,
        'email' => $request->email,
        'gender' => $request->gender,
        'age' => $request->age,
        'phone_number' => $request->phone_number,
    ]);

  


    return response([
        'message' => "Student created successfully",
    ], 201);
}


//now we want to delete a specific student
public function deleteStudent($id)
{
    // Retrieve the currently authenticated user (teacher)
    $teacher = auth()->user();
    
    // Get the student associated with this teacher
    $student = $teacher->students()->find($id);
    
    // Check if the student exists
    if (!$student) {
        return response([
            'message' => 'Student not found'
        ], 404);
    } else {
        $student->delete();
        return response([
            'message' => 'Student deleted successfully'
        ], 200);
    }

}


//now we want to edit a specific student
public function editStudent(Request $request, $id)
{
    // Retrieve the currently authenticated user (teacher)
    $teacher = auth()->user();
    
    // Get the student associated with this teacher
    $student = $teacher->students()->find($id);
    
    // Check if the student exists
    if (!$student) {
        return response([
            'message' => 'Student not found'
        ], 404);
    } else {
        // Validate the request data
        $request->validate([
            'fullname' => 'required|string',
            'university_id' => 'required|unique:students,university_id|string',
            'email' => 'required|email|unique:students,email',
            'study_mode' => 'nullable|string',
            'nationality' => 'nullable|string',
            'gender' => 'nullable|string',
            'age' => 'nullable|integer',
            'phone_number' => 'nullable|string',
        ]);

        // Update the student
        $student->update([
            'fullname' => $request->fullname,
            'university_id' => $request->university_id,
            'study_mode' => $request->study_mode,
            'email'=> $request->email,
            'nationality'=> $request->nationality,
            'gender', $request->gender,
            'age' => $request->age,
            'phone_number' => $request->phone_number,
        ]);

        return response([
            'message' => 'Student updated successfully'
        ], 200);


    }
}


    

    

}
