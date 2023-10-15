<?php

use Illuminate\Support\Facades\Route;
use App\Models\carousel_imgs;
use App\Models\texts;
use App\Models\photos;
use App\Models\prices;
use App\Models\reviews;
use App\Models\faqs;
use App\Models\services;
use App\Http\Controllers\srsingle;

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

Route::get('index', function () {
    $texts = texts::where('team', 1)->get();
    $carousel = carousel_imgs::where('team', 1)->get();
    return view('index', compact('carousel', 'texts'));
})->name('home1');

Route::get('index2', function () {
    $texts = texts::where('team', 1)->get();
    $carousel = carousel_imgs::where('team', 2)->get();
    return view('index-2', compact('carousel', 'texts'));
})->name('home2');

Route::get('index3', function () {
    $texts = texts::where('team', 1)->get();
    $carousel = carousel_imgs::where('team', 3)->get();
    return view('index-3', compact('carousel', 'texts'));
})->name('home3');

Route::get('/', function () {
    $texts = texts::where('team', 1)->get();
    $carousel = carousel_imgs::where('team', 4)->get();
    return view('index-4', compact('carousel', 'texts'));
});


Route::get('/about', function () {
    $texts = texts::where('team', 1)->get();
    return view('about', compact('texts'));
})->name('about');

Route::get('/team', function () {
    $photos = photos::all();
    $texts = texts::where('team', 1)->get();
    return view('team', compact('texts', 'photos'));
})->name('team');

Route::get('/team', function () {
    $photos = photos::all();
    $texts = texts::where('team', 1)->get();
    return view('team', compact('texts', 'photos'));
})->name('team');

Route::get('/pricing', function () {
    $prices = prices::all();
    return view('pricing', compact('prices'));
})->name('pricing');

Route::get('/testimonials', function () {
    $reviews = reviews::all();
    return view('testimonials', compact('reviews'));
})->name('testimonials');

Route::get('/faqs', function () {
    $qa = faqs::all();
    return view('faq', compact('qa'));
})->name('faqs');

Route::get('/services', function () {
    $max_id = services::max('id');
    $services = services::all();
    return view('services', compact('services', 'max_id'));
})->name('services');

Route::get('/contact', function () {
    $max_id = services::max('id');
    $services = services::all();
    return view('contact', compact('services', 'max_id'));
})->name('contact');

Route::controller(srsingle::class)->group(function (){
    Route::get('/ser-single/{id}', [srsingle::class, 'index'])->name('ser-single');
});
