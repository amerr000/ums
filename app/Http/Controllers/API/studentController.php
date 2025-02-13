<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Student;
use Illuminate\Validation\Rule;
use Carbon\Carbon;





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



    //now we have to get all the students that are enrolled in a specific class of a teacher note that there is a pivout table that has the enrolled students
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
            $students = $class->studentEnrolled()->select('id', 'fullname','university_id','nationality')->get();
    
            return response([
                'students' => $students
            ], 200);
        }
    } // <-- Missing closing bracket was added here ✅
    


public function createStudent(Request $request)
{
    // Retrieve the currently authenticated user (teacher)
    $teacher = auth()->user();

    // Validate the request data
    $request->validate([
        'fullname' => 'required|string',
        'university_id' => 'required|string',
        'email' => 'required|email|unique:students,email',
        'study_mode' => 'nullable|string',
        'nationality' => 'nullable|string',
        'gender' => 'nullable|string',
        'age' => 'nullable|integer',
        'phone_number' => 'nullable|string',
        'note' => 'nullable|string',
    ]);

    // Check if the student with the same university_id already exists for this teacher
    $existingStudent = $teacher->students()->where('university_id', $request->university_id)->first();

    if ($existingStudent) {
        return response([
            'message' => 'Student already exists for this teacher.'
        ], 400);
    }

    // Create the student
    $student = Student::create([
        'fullname' => $request->fullname,
        'university_id' => $request->university_id,
        'study_mode' => $request->study_mode,
        'nationality'=> $request->nationality,
        'email' => $request->email,
        'gender' => $request->gender,
        'age' => $request->age,
        'phone_number' => $request->phone_number,
        'note' => $request->note,
    ]);

    // Attach the student to the teacher
    $teacher->students()->attach($student->id);

    return response([
        'status' => 'success',
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
public function takeAttendance(Request $request, $class_id)
{
    // Retrieve the currently authenticated user (teacher)
    $teacher = auth()->user();
    
    // Get the class associated with this teacher
    $class = $teacher->classes()->find($class_id);
    
    // Check if the class exists
    if (!$class) {
        return response([
            'message' => 'Class not found'
        ], 404);
    }

    // Validate the request data
    $request->validate([
        'students' => 'required|array',
        'students.*.student_id' => 'required|integer|exists:students,id', // Student ID validation
        'students.*.status' => ['required', Rule::in(['present', 'absent'])],
        'students.*.absence_cause' => 'nullable|string', // Optional cause validation for absent students
    ]);

    // Get today's date
    $date = Carbon::now()->toDateString();

    // Loop through each student and take attendance
    foreach ($request->students as $student) {
        $pivotData = [
            'status' => $student['status'] === 'present' ? 1 : 0, // Change 'present' to 1 and 'absent' to 0
            'date' => $date, // Add the date of attendance
        ];

        // If the student is absent, include the absence cause
        if ($student['status'] === 'absent' && isset($student['absence_cause'])) {
            $pivotData['absence_cause'] = $student['absence_cause'];
        }

        // Insert the attendance in the pivot table
        $class->studentAttendances()->attach($student['student_id'], $pivotData);
    }

    return response([
        'message' => 'Attendance taken successfully'
    ], 200);
}



 //now we will write a function to get the id, fullname, and university_id of all students that satisfies that name part of name of class that will be sent in the parameter and ofcourse we will check if the teacher calling this function is authorized to do so
 public function getStudentByName(Request $request, $search)
 {
     // Ensure the user is authenticated
     if (!$request->user()) {
         return response([
             'message' => 'You are not authorized to view this data'
         ], 403); // Forbidden
     }
 
     // Retrieve the currently authenticated user (teacher)
     $teacher = $request->user();
 
     // Get the list of students associated with this teacher and filter by fullname
     $students = $teacher->students()
         ->where('fullname', 'like', "%$search%")
         ->select('id', 'fullname', 'university_id')
         ->get();
 
     return response([
         'students' => $students
     ], 200);
 }

 public function getNotRegisteredStudentsByName(Request $request, $search, $classId)
 {
     // Ensure the user is authenticated
     if (!$request->user()) {
         return response([
             'message' => 'You are not authorized to view this data'
         ], 403); // Forbidden
     }
 
     // Retrieve the currently authenticated teacher
     $teacher = $request->user();
 
     // Get students assigned to this teacher, filter by name, and exclude those already in the class
     $students = $teacher->students()
         ->where('fullname', 'like', "%$search%")
         ->whereDoesntHave('uniclasses', function ($query) use ($classId) {
             $query->where('uniclasses.id', $classId);
         })
         ->select('id', 'fullname', 'university_id')
         ->get();
 
     return response([
         'students' => $students
     ], 200);
 }
 

 





}