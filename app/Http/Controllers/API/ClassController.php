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


    //now we will fetch all the uniclass table data and return it as a json response for a specific teacher and i want to return the teacher name too

    public function index(Request $request)
    {
        // Fetch all classes for the logged-in teacher
        $uniclasses = Uniclass::where('teacher_id', $request->user()->id)->get();
    
        // Fetch the teacher's name (assuming teacher's ID is the same as the logged-in user)
        $teacherName = Teacher::where('id', $request->user()->id)->first();
    
        // Add the teacher's name to each class in the collection
        $uniclasses->map(function($class) use ($teacherName) {
            $class->teacher_name = $teacherName ? $teacherName->fullname : 'Unknown';
        });
    
        // Return the response with classes and teacher name
        return response([
            'uniclasses' => $uniclasses
        ], 200);
    }
    //now in the same way as before we are going to get all classes of a teacher but we will return the classes now that has archived as true and the teacher name
    public function viewCurrentTermClasses(Request $request)
    {
        // Fetch all archived classes for the logged-in teacher
        $uniclasses = Uniclass::where('teacher_id', $request->user()->id)->where('archived', false)->get();
    
        // Fetch the teacher's name (assuming teacher's ID is the same as the logged-in user)
        $teacherName = Teacher::where('id', $request->user()->id)->first();
    
        // Add the teacher's name to each class in the collection
        $uniclasses->map(function($class) use ($teacherName) {
            $class->teacher_name = $teacherName ? $teacherName->fullname : 'Unknown';
        });
    
        // Return the response with classes and teacher name
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
        $teachername=$uniclass->teacher->fullname;
        //now we want to add the teacher name to the uniclass object 
        $uniclass->teacher_name = $teachername;
    
        // Fetch the students enrolled in the class
        $students = $uniclass->studentEnrolled;
    
        // Return the response with the class details
        return response([
            'uniclass' => $uniclass,
        ], 200);
    }
    













//ok now what we are going to do is to delete a specific class from the database

public function deleteClass(Request $request, $id)
{
    // Find the class by its ID
    $uniclass = Uniclass::find($id);

    // Check if the class exists
    if (!$uniclass) {
        return response()->json([
            'success' => false,
            'message' => 'Class not found'
        ], 404);
    }

    // Check if the logged-in teacher is authorized to delete this class
    if ($uniclass->teacher_id != $request->user()->id) {
        return response()->json([
            'success' => false,
            'message' => 'You are not authorized to delete this class'
        ], 403);
    }

    // Proceed to delete the class
    $uniclass->delete();

    return response()->json([
        'success' => true,
        'message' => 'Class deleted successfully'
    ], 200);
}








// now we are going to add a class to the table called uniclass and we will validate the request data and then we will check if the class already exists in the database
    public function addClass(Request $request)
{
    $validatedData = $request->validate([
        'class_name' => 'required|string|max:255',
        'code' => 'required|string|max:50',
        'description' => 'required|string',
        'section' => 'required|string|max:10',
        'class_type' => 'required|string|max:50',
        'schedule' => 'required|string|max:255',
        'semester' => 'required|string|max:50',
        'room_number' => 'required|string|max:50',
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
        return response([
            'message' => 'Class already exists'
        ], 409); // Conflict
    }

    // Create the class if it doesnt exist and assign the class to the current authenticated teacher note that also the archived is by default false
    $uniclass = new Uniclass();
    $uniclass->teacher_id = $request->user()->id;
    $uniclass->archived = false;
    $uniclass->class_name = $validatedData['class_name'];
    $uniclass->code = $validatedData['code'];
    $uniclass->description = $validatedData['description'];
    $uniclass->section = $validatedData['section'];
    $uniclass->class_type = $validatedData['class_type'];
    $uniclass->schedule = $validatedData['schedule'];
    $uniclass->semester = $validatedData['semester'];
    $uniclass->room_number = $validatedData['room_number'];
    $uniclass->save();

    return response([
        'message' => 'Class added successfully'
    ], 201);




    

}














    

    //now we are going to edit a specific class in the database first we want to return the column values of this class and then if the data is updated we will save the new data
    public function editClass(Request $request, $id){
        // Check if the class of that authenticated teacher exists
        $uniclass = Uniclass::where('teacher_id', $request->user()->id)->find($id);
        if (!$uniclass) {
            return response()->json([
                'message' => 'Class not found'
            ], 404);
        }
    
        // Validate the request data
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
        ]);
    
        // Update the class column values and save them in the database 
        $uniclass->archived = $validatedData['archived'];
        $uniclass->class_name = $validatedData['class_name'];
        $uniclass->code = $validatedData['code'];
        $uniclass->description = $validatedData['description'];
        $uniclass->section = $validatedData['section'];
        $uniclass->class_type = $validatedData['class_type'];
        $uniclass->schedule = $validatedData['schedule'];
        $uniclass->semester = $validatedData['semester'];
        $uniclass->room_number = $validatedData['room_number'];
        $uniclass->save();
    
        return response()->json([
            'status' => true,
            'message' => 'Class updated successfully'
        ], 200);
    }

   
//now we want to create a function to archive a class meaning changing the column archived to 1
    public function archiveClass(Request $request, $id)
    {
        // Find the class by its ID
        $uniclass = Uniclass::find($id);
    
        // Check if the class exists
        if (!$uniclass) {
            return response()->json([
                'success' => false,
                'message' => 'Class not found'
            ], 404);
        }
    
        // Check if the logged-in teacher is authorized to archive this class
        if ($uniclass->teacher_id != $request->user()->id) {
            return response()->json([
                'success' => false,
                'message' => 'You are not authorized to archive this class'
            ], 403);
        }
    
        // Proceed to archive the class
        $uniclass->archived = true;
        $uniclass->save();
    
        return response()->json([
            'success' => true,
            'message' => 'Class archived successfully'
        ], 200);
    }
    
    //now we want to create a function to unarchive a class meaning changing the column archived to 0
    public function unarchiveClass(Request $request, $id)
    {
        // Find the class by its ID
        $uniclass = Uniclass::find($id);
    
        // Check if the class exists
        if (!$uniclass) {
            return response()->json([
                'success' => false,
                'message' => 'Class not found'
            ], 404);
        }
    
        // Check if the logged-in teacher is authorized to unarchive this class
        if ($uniclass->teacher_id != $request->user()->id) {
            return response()->json([
                'success' => false,
                'message' => 'You are not authorized to unarchive this class'
            ], 403);
        }
    
        // Proceed to unarchive the class
        $uniclass->archived = false;
        $uniclass->save();
    
        return response()->json([
            'success' => true,
            'message' => 'Class unarchived successfully'
        ], 200);
    }



    //now we will write a function to get the course id, course name, and section of all classes that satisfies that name part of name of class that will be sent in the parameter and ofcourse we will check if the teacher calling this function is authorized to do so
    public function getCourseIdNameSection(Request $request, $search)
    {
        // Check if the user is logged in
        if (!$request->user()) {
            return response([
                'message' => 'You are not authorized to view this class'
            ], 403); // Forbidden
        }
    
        // Fetch all classes for the logged-in teacher, and filter by class_name or section if search query is provided
        $uniclasses = Uniclass::where('teacher_id', $request->user()->id)
            ->where(function ($query) use ($search) {
                // Filter by class name or section
                $query->where('class_name', 'LIKE', "%$search%");
            })
            ->get();
    
        // Return the response with classes
        return response([
            'uniclasses' => $uniclasses
        ], 200);
    }
    
    
    
    















}
