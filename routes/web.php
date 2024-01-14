<?php

use App\Http\Controllers\photosvideosController;
use App\Http\Controllers\keynotesController;
use App\Http\Controllers\sponsorsController;
use App\Http\Controllers\specialsessionsController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dates', function () {
    return view('dates');
})->name('dates');

Route::get('/programs', function () {
    return view('programs');
})->name('programs');

Route::get('/guidelines', function () {
    return view('guidelines');
})->name('guidelines');

Route::get('/inscription', function () {
    return view('inscription');
});

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/call-for-papers', function () {
    return view('call-for-papers');
})->name('call-for-papers'); 

Route::get('/social-events', function () {
    return view('social-events');
})->name('social-events'); 


Route::get('/studentcontest', function () {
    return view('studentcontest');
})->name('studentcontest'); 




Route::get('/exibitors', function () {
    return view('exibitors');
})->name('exibitors'); 


Route::get('/herakilton', function () {
    return view('herakilton');
})->name('herakilton'); 


Route::get('/conference', function () {
    return view('conference');
})->name('conference');


Route::get('/photosvideos', function () {
    return view('photosvideos.index');
})->name('photosvideos'); 

Route::get('/keynotes', function () {
    return view('keynotes.index');
})->name('keynotes'); 


Route::get('/topics', function () {
    return view('topics');
})->name('topics'); 

Route::get('/commitees', function () {
    return view('commitees');
})->name('commitees'); 

Route::get('/specialsessions', function () {
    return view('specialsessions');
})->name('specialsessions'); 


Route::get('/sponsors', function () {
    return view('sponsors');
})->name('sponsors'); 

Route::get('/contact', function () {
    return view('contact');
})->name('contact'); 


Route::get('/technical', function () {
    return view('technical');
})->name('technical'); 

Route::get('/registration', function () {
    return view('registration');
})->name('registration'); 

Route::get('/inscription', function () {
    return view('inscription');
})->name('inscription'); 

Route::get('/hotel', function () {
    return view('hotel');
})->name('hotel');

Route::get('/keynotes', [keynotesController::class, 'index'])->name('keynotes');

Route::get('/specialsessions', [specialsessionsController::class, 'index'])->name('specialsessions');

Route::get('/sponsors', [sponsorsController::class, 'index'])->name('sponsors');

Route::get('/photosvideos', [photosvideosController::class, 'index'])->name('photosvideos');