<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
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
/*
Route naming
Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return "<h1>About Page</h1>";
})->name('about');

Route::get('contact', function () {
    return "<h1>Contact Pages</h1>";
});

Route::get('contact/{id}/{name}', function ($id, $name) {
    return $id . $name;
})->name('edit-contact');

Route::get('home', function () {
    //route naming => route();
    //use of php => .(something).
    return "<a href='".route('edit-contact', [1, 'ccsc'])."'>About<a>";
});
*/

/*
//Route Groups
Route::prefix('user')->group(function () {
    Route::get('/', function() {
        return "<h1>Customer List<h1>";
    });

    Route::get('/create', function() {
        return "<h1>Customer Create<h1>";
    });

    Route::get('/show', function() {
        return "<h1>Customer Show<h1>";
    });
})->name('customer');
*/

//Route methods
/**
 * GET - Request a resource
 * POST - Create a new resource
 * PUT - Update resources
 * PATCH - Modfiy a resource
 * DELETE - Delete a resource
 */

/*
// Route Fallback
  Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return "<h1>About Page</h1>";
})->name('about');

Route::get('contact', function () {
    return "<h1>Contact Pages</h1>";
});

//Always at the bottom of the file
Route::fallback(function () {
    return "Route Not Exist!";
});
*/
/*
Folder views
Route::get('/', function () {
    return view('welcome');
});
Route::get('about', function () {
    return view('about.index');
});

Route::get('contact', function () {
    return view('contact');
});
*/

/**
 * M = Model
 * V = View
 * C = Controller
 */

//Passing values to from route to views
//Route::get('/home', HomeController::class);
//Route::get('/about', [AboutController::class, 'index']);
//Route::get('/contact', [ContactController::class, 'index']);
//Route::resource('blog', BlogController::class);


Route::get('/', function () {
    return view('welcome');
});

//CSRF Token
Route::get('/home', HomeController::class);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'handleLogin'])->name('login.submit');
