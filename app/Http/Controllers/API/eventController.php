<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class eventController extends Controller
{
    //


    public function createEvent(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string',
            'description' => 'string',
            'date' => 'required|date',
            'time' => 'required|string',
            'category' => 'required|string',]);

        // Retrieve the currently authenticated user (teacher)
        $teacher = auth()->user();

        // Create the event
        $event = $teacher->events()->create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'time' => $request->date,
            'category' => $request->category
        ]);

       //now we want to insert the data in the database like here the teacher has created an event


        return response([
            'message' => 'Event created successfully'
        ], 201);
    }



    public function deleteEvent($id)
    {
        // Retrieve the currently authenticated user (teacher)
        $teacher = auth()->user();

        // Get the event associated with this teacher
        $event = $teacher->events()->find($id);

        // Check if the event exists
        if (!$event) {
            return response([
                'message' => 'Event not found'
            ], 404);
        } else {
            // Delete the event
            $event->delete();

            return response([
                'message' => 'Event deleted successfully'
            ], 200);
        }
    }


    public function editEvent(Request $request, $id)
    {
        // Retrieve the currently authenticated user (teacher)
        $teacher = auth()->user();

        // Get the event associated with this teacher
        $event = $teacher->events()->find($id);

        // Check if the event exists
        if (!$event) {
            return response([
                'message' => 'Event not found'
            ], 404);
        } else {
            // Validate the request
            $request->validate([
                'title' => 'required|string',
                'description' => 'string',
                'date' => 'required|date',
                'time' => 'required|string',
                'category' => 'required|string',
            ]);

            // Update the event
            $event->update([
                'title' => $request->title,
                'description' => $request->description,
                'date' => $request->date,
                'time' => $request->time,
                'category' => $request->category
            ]);

            return response([
                'message' => 'Event updated successfully'
            ], 200);
        }
    }


    public function viewAllEvents()
    {
        // Retrieve the currently authenticated user (teacher)
        $teacher = auth()->user();

        // Get all the events associated with this teacher
        $events = $teacher->events;

        return response([
            'events' => $events
        ], 200);
    }

    //now we will make a function to view a certain event
    public function viewSpecificEvent($id)
    {
        // Retrieve the currently authenticated user (teacher)
        $teacher = auth()->user();

        // Get the event associated with this teacher
        $event = $teacher->events()->find($id);

        // Check if the event exists
        if (!$event) {
            return response([
                'message' => 'Event not found'
            ], 404);
        } else {
            return response([
                'event' => $event
            ], 200);
        }
    }
}
