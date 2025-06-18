<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Import the HomeController
use App\Http\Controllers\ContactController; // Import the ContactController
use App\Http\Controllers\ServicesController; // Import the ServicesController
use App\Http\Controllers\AboutController;// Import the AboutController
use App\Http\Controllers\PortfolioController; // Import the PortfolioController
use App\Http\Controllers\TestimonialController; // Import the TestimonialController

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

// Route::get('/', function () {
//     return view('/Home');
// });
Route::get('/', [HomeController::class, 'index']);

//ABOUT PAGE ROUTES
// Route::get('/About', function () {
//     return view('About');
// });

//Using a controller for the About page
Route::get('/About', [AboutController::class, 'index']);

//Contact
// Route::get('/Contact', function () {
//     return view('Contact');
// });
Route::get('/Contact', [ContactController::class, 'index']);

//Services
// Route::get('/Services', function () {
//     return view('Services');
// });
Route::get('/Services', [ServicesController::class, 'index']);

//PORTFOLIO
// Route::get('/Portfolio', function () {
//     return view('Portfolio');
// });
Route::get('/Portfolio', [PortfolioController::class, 'index']);

//Testimonial
// Route::get('/Testimonial', function () {
//     return view('Testimonial');
// });
Route::get('/Testimonial', [TestimonialController::class, 'index']);

//Events

Route::get('/Events', function () {
    return view('Events');
});


//Login
Route::get('/LogIn', function () {
    return view('LogIn');
});