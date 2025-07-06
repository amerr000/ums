<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //


    public function createEvent(Request $request)
    {
        // Validate the request
        $request->validate([
            'event_name' => 'required|string',
            'description' => 'nullable|string',
            'event_start_date_and_time' => 'required|date',
            'event_end_date_and_time' => 'required|date|after:event_start_date_and_time',
            'category' => 'required|string',
        ]);
    
        // Retrieve the currently authenticated user (teacher)
        $teacher = auth()->user();
    
        // Create the event
        $event = $teacher->events()->create([
            'event_name' => $request->event_name,
            'description' => $request->description,
            'event_start_date_and_time' => $request->event_start_date_and_time,
            'event_end_date_and_time' => $request->event_end_date_and_time,
            'category' => $request->category,
            'teacher_id' => $teacher->id
        ]);
    
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
                'event_name' => 'required|string',
            'description' => 'nullable|string',
            'category' => 'required|string',
            ]);

            // Update the event
            $event->update([
                'event_name' => $request->event_name,
                'description' => $request->description,
                'category' => $request->category,
            ]);

            return response([
                'message' => 'Event updated successfully'
            ], 200);
        }
    }


    public function index()
    {
        // Retrieve the currently authenticated user (teacher)
        $teacher = auth()->user();

        // Get all the events associated with this teacher
        $events = $teacher->events;
        if ($events->isEmpty()) {
            return response([
                'message' => 'No events found'
            ], 404);
        }

        return response([
            'events' => $events
        ], 200);
    }

    //now we will make a function to view a certain event
    public function showSpecificEvent($id)
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
