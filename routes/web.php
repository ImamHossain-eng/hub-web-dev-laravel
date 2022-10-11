<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//laravel version 4-7
// Route::get('/', 'PageController@homepage');

Route::get('/', [PageController::class, 'homepage'])->name('homepage');

// Route::post('/', [PageController::class, 'homepage'])->name('abc');

// Route::get('/pages/contact', [PageController::class, 'contact'])->name('contact');

// Route::get('/pages/about', [PageController::class, 'about'])->name('about');

// Route::prefix('pages')->middleware('admin')->group(function () {
//     Route::get('/contact', [PageController::class, 'contact'])->name('contact');

//     Route::get('/about', [PageController::class, 'about'])->name('about');
// });


Route::group([
    'prefix' => 'pages', 
    'controller' => PageController::class
], function () {

    Route::get('/contact', 'contact')->name('contact');

    Route::get('/about', 'about')->name('about');
});



Route::get('/post/{id}', [PageController::class, 'postShow'])->name('post.show');

// Route::redirect('/test', '/about');

// Route::get('/about', function () {
//     return view('pages.about');
// });

//view route
// Route::view('/', 'homePage');
// Route::view('/about', 'pages.about');
// Route::view('/contact', 'pages.contact');

// Route::get('/contact', [PageController::class, 'contact']);

// Route::get('/about', [PageController::class, 'about']);


