<?php

namespace App\Http\Controllers;

use App\Models\reviews;
use Illuminate\Http\Request;
use App\Models\configs;
use App\Models\services;
use App\Models\photos;
use App\Models\texts;
use App\Models\prices;
use App\Models\carousel_imgs;
use App\Models\faqs;
use App\Models\chooses;
use App\Models\galerys;

class edit extends Controller
{
    public function index($table, $id, $grupp){
        $gallery = galerys::all();
        $choose = chooses::all();
        $qa = faqs::all();
        $reviews = reviews::all();
        $configs = configs::all();
        $configs_min = configs::min('id');
        $services = services::all();
        $photos = photos::all();
        $texts = texts::all();
        $prices = prices::all();
        $carousel = carousel_imgs::all();
        return view('edit', compact('services', 'gallery', 'choose', 'qa', 'reviews', 'configs', 'configs_min', 'photos', 'texts', 'prices', 'carousel', 'table', 'id', 'grupp'));
    }
}
