<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;



class AuthController extends Controller
{
    


    public function login(Request $request)
    {
       
        //now we have to check if the the teacher exist in the teacher table
        $teacher = Teacher::where('email', $request->email)->first();
        if (!$teacher || !($request->password == $teacher->password)) {
            return response([
                'message' => ['Invalid credentials']
            ], 401);
        }
        else{
            $token = $teacher->createToken('authToken')->plainTextToken;

            return response([
                'message' => ['Login successful'],
                'token' => $token
            ], 200);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response([
            'message' => ['Logged out']
        ], 200);
    }


    

}
