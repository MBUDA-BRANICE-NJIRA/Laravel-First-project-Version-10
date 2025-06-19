<?php

namespace App\Http\Controllers;
use App\Models\EventModel; // Import the EventModel

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = EventModel::all(); // Fetch all events from the database
        return view('events', compact('events'));
    }
}
