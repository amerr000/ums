<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;



class AuthController extends Controller
{
    

  // now we want to create a login function that generates a token if the teacher really exist in the teacher table
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        // check if the teacher exist in the teacher table
        $teacher = Teacher::where('email', $request->email)->first();
        
        // if the teacher does not exist
        if (! $teacher || !($request->password == $teacher->password)) {
            return response([
                'message' => ['The provided credentials are incorrect.']
            ], 404);
        }
        
        // if the teacher exist
        $token = $teacher->createToken('token-name')->plainTextToken;
        
        return response([
            'message' => "login successful",
            'token' => $token
        ], 200);
    }




    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response([
            'message' => ['Logged out']
        ], 200);
    }


    

}
