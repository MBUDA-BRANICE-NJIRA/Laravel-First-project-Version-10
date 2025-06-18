<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {

        $events = About::all();// Assuming you have an About model to fetch data from the database
        return view('About');
    }
}
