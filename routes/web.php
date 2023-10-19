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
use App\Models\galerys;
use App\Models\configs;
use App\Http\Controllers\edit;
use App\Http\Controllers\appointment;

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
    $configs = configs::all();
    $texts = texts::where('team', 1)->get();
    $carousel = carousel_imgs::where('team', 1)->get();
    return view('index', compact('carousel', 'texts', 'configs'));
})->name('home1');

Route::get('index2', function () {
    $configs = configs::all();
    $texts = texts::where('team', 1)->get();
    $carousel = carousel_imgs::where('team', 2)->get();
    return view('index-2', compact('carousel', 'texts', 'configs'));
})->name('home2');

Route::get('index3', function () {
    $configs = configs::all();
    $texts = texts::where('team', 1)->get();
    $carousel = carousel_imgs::where('team', 3)->get();
    return view('index-3', compact('carousel', 'texts', 'configs'));
})->name('home3');

Route::get('/', function () {
    $configs = configs::all();
    $texts = texts::where('team', 1)->get();
    $carousel = carousel_imgs::where('team', 4)->get();
    return view('index-4', compact('carousel', 'texts', 'configs'));
});


Route::get('/about', function () {
    $configs = configs::all();
    $texts = texts::where('team', 1)->get();
    return view('about', compact('texts', 'configs'));
})->name('about');

Route::get('/team', function () {
    $configs = configs::all();
    $photos = photos::all();
    $texts = texts::where('team', 1)->get();
    return view('team', compact('texts', 'photos', 'configs'));
})->name('team');

Route::get('/team', function () {
    $configs = configs::all();
    $photos = photos::all();
    $texts = texts::where('team', 1)->get();
    return view('team', compact('texts', 'photos', 'configs'));
})->name('team');

Route::get('/pricing', function () {
    $configs = configs::all();
    $prices = prices::all();
    return view('pricing', compact('prices', 'configs'));
})->name('pricing');

Route::get('/A_log', function () {
    $configs = configs::all();
    $prices = prices::all();
    return view('A_log', compact('prices', 'configs'));
})->name('A_log');

Route::get('/testimonials', function () {
    $configs = configs::all();
    $reviews = reviews::all();
    return view('testimonials', compact('reviews', 'configs'));
})->name('testimonials');

Route::get('/faqs', function () {
    $configs = configs::all();
    $qa = faqs::all();
    return view('faq', compact('qa', 'configs'));
})->name('faqs');

Route::get('/services', function () {
    $configs = configs::all();
    $max_id = services::max('id');
    $services = services::all();
    return view('services', compact('services', 'max_id', 'configs'));
})->name('services');

Route::get('/gallery', function () {
    $configs = configs::all();
    $gallerys = galerys::all();
    return view('gallery', compact('gallerys', 'configs'));
})->name('gallery');

Route::get('/contact', function () {
    $configs = configs::all();
    return view('contact', compact('configs'));
})->name('contact');

Route::controller(edit::class)->group(function (){
    Route::get('/edit/{table}/{id}/{grupp}', [edit::class, 'index'])->name('edit');
    Route::put('/update/{grupp}/{id}/{id2}', [edit::class, 'update'])->name('update');
//    Route::post('/register', [edit::class, 'register'])->name('register');
    Route::get('/login', [edit::class, 'login'])->name('login');
    Route::get('/logout', [edit::class, 'logout'])->name('logout');
});

Route::controller(srsingle::class)->group(function (){
    Route::get('/ser-single/{id}', [srsingle::class, 'index'])->name('ser-single');
    Route::get('/gallerySingle/{id}', [srsingle::class, 'gallerySingle'])->name('gallery-single');
});

Route::controller(appointment::class)->group(function (){
    Route::get('/appointment', [appointment::class, 'index'])->name('appointment');
    Route::get('/message', [appointment::class, 'message'])->name('message');
});
