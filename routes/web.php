<?php

use Illuminate\Support\Facades\Route;
use App\Models\carousel_imgs;
use App\Models\texts;

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
