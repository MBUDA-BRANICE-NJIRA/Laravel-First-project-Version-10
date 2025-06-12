<?php

//use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


//Home Page Routes
Route::get('Home', function () {
    return view('Home');
});

//About
Route::get('About', function () {
    return view('About');
});

//Contact
Route::get('Contact', function () {
    return view('Contact');
});

//Services
Route::get('Services', function () {
    return view('Services');
});

//Portfolio and Blog
Route::get('Portfolio', function () {
    return view('Portfolio');
});
//Testiminial
Route::get('Testimonial', function () {
    return view('Testimonilal');
});

//Login
Route::get('LogIn', function () {
    return view('BlogSingle');
});