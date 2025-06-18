<?php


namespace App\Http\Controllers;
use App\Models\About; // Import the About model
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {

        $about = About::all();// Assuming you have an About model to fetch data from the database
        return view('About', compact('about'));
    }
}
