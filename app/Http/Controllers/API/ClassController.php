<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Uniclass;
use App\Models\Teacher;
use Illuminate\Validation\Rule;


class ClassController extends Controller
{
    //


    //now we will fetch all the uniclass table data and return it as a json response for a specific teacher

    public function index(Request $request)
    {
        $uniclasses = Uniclass::where('teacher_id', $request->user()->id)->get();
        return response([
            'uniclasses' => $uniclasses
        ], 200);
    }












    //now we will fetch a specific class data and return it as a json response which teacher teaches this class and the students that are enrolled in the class

    public function specificClass(Request $request, $id)
    {
        // Find the class by ID
        $uniclass = Uniclass::find($id);
        
        // Check if the class exists
        if (!$uniclass) {
            return response([
                'message' => 'Class not found'
            ], 404);
        }
    
        // Ensure that the teacher of the class is the currently authenticated teacher
        if ($uniclass->teacher_id != $request->user()->id) {
            return response([
                'message' => 'You are not authorized to view this class'
            ], 403); // Forbidden
        }
    
        // Fetch the students enrolled in the class
        $students = $uniclass->studentEnrolled;
    
        // Return the response with the class details
        return response([
            'uniclass' => $uniclass,
            'students' => $students
        ], 200);
    }
    













//ok now what we are going to do is to delete a specific class from the database

public function deleteClass(Request $request, $id)
{
    // Find the class by its ID
    $uniclass = Uniclass::find($id);

    // Check if the class exists
    if (!$uniclass) {
        return response([
            'message' => 'Class not found'
        ], 404);
    }

    // Check if the logged-in teacher is the teacher for this class
    if ($uniclass->teacher_id != $request->user()->id) {
        return response([
            'message' => 'You are not authorized to delete this class'
        ], 403);
    }

    // Proceed to delete the class if the teacher is authorized
    $uniclass->delete();

    return response([
        'message' => 'Class deleted successfully'
    ], 200);
}









    //now we will create a new class in the database note that the teacher name will also be given so we are going to search for the teacher id based on the teacher name
    public function addClass(Request $request)
{
    $validatedData = $request->validate([
        'archived' => 'required|boolean',
        'class_name' => 'required|string|max:255',
        'code' => 'required|string|max:50',
        'description' => 'required|string',
        'section' => 'required|string|max:10',
        'class_type' => 'required|string|max:50',
        'schedule' => 'required|string|max:255',
        'semester' => 'required|string|max:50',
        'room_number' => 'required|string|max:50',
        'teacher_name' => 'required|string|max:255',
    ]);
    
    // Manually check if a class with identical fields exists
    $duplicate = Uniclass::where('archived', $request->archived)
        ->where('class_name', $request->class_name)
        ->where('code', $request->code)
        ->where('description', $request->description)
        ->where('section', $request->section)
        ->where('class_type', $request->class_type)
        ->where('schedule', $request->schedule)
        ->where('semester', $request->semester)
        ->where('room_number', $request->room_number)
        ->exists();
    
    if ($duplicate) {
        return response()->json(['error' => 'A class with these exact details already exists. Please modify at least one field.'], 422);
    }
    // Find the teacher
    $teacher = Teacher::where('fullname', $validatedData['teacher_name'])->first();

    // Create new class
    $uniclass = new Uniclass();
    $uniclass->archived = $validatedData['archived'];
    $uniclass->class_name = $validatedData['class_name'];
    $uniclass->code = $validatedData['code'];
    $uniclass->description = $validatedData['description'];
    $uniclass->section = $validatedData['section'];
    $uniclass->class_type = $validatedData['class_type'];
    $uniclass->schedule = $validatedData['schedule'];
    $uniclass->semester = $validatedData['semester'];
    $uniclass->room_number = $validatedData['room_number'];
    $uniclass->teacher_id = $teacher->id;

    // Save the class
    $uniclass->save();

    return response([
        'message' => 'Class created successfully'
    ], 200);
}














    //now we are going to return the courses that have archived column false and belong to the current logged in teacher
    public function viewCurrentTermClasses(Request $request)
    {
        $uniclasses = Uniclass::where('teacher_id', $request->user()->id)->where('archived', false)->get();
        return response([
            'uniclasses' => $uniclasses
        ], 200);
    }


    //now we are going to edit a specific class in the database first we want to return the column values of this class and then if the data is updated we will save the new data
    public function editClass(Request $request, $id){
        //we want first to see if the class of that authenticated teacher exists
        $uniclass = Uniclass::where('teacher_id', $request->user()->id)->find($id);
        if (!$uniclass) {
            return response([
                'message' => 'Class not found'
            ], 404);
        }
        //now we want to validate the request data
        $validatedData = $request->validate([
            'archived' => 'required|boolean',
            'class_name' => 'required|string|max:255',
            'code' => 'required|string|max:50',
            'description' => 'required|string',
            'section' => 'required|string|max:10',
            'class_type' => 'required|string|max:50',
            'schedule' => 'required|string|max:255',
            'semester' => 'required|string|max:50',
            'room_number' => 'required|string|max:50',
            'teacher_name' => 'required|string|max:255',
        ]);
        //now we want to update the class column values and save them in the database 
        $uniclass->archived = $validatedData['archived'];
        $uniclass->class_name = $validatedData['class_name'];
        $uniclass->code = $validatedData['code'];
        $uniclass->description = $validatedData['description'];
        $uniclass->section = $validatedData['section'];
        $uniclass->class_type = $validatedData['class_type'];
        $uniclass->schedule = $validatedData['schedule'];
        $uniclass->semester = $validatedData['semester'];
        $uniclass->room_number = $validatedData['room_number'];
        $uniclass->teacher_name = $validatedData['teacher_name'];
        $uniclass->save();
        return response([
            'message' => 'Class updated successfully'
        ], 200);
        


    }

   
















}
