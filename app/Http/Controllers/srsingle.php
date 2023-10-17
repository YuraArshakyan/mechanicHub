<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\services;
use App\Models\chooses;
use App\Models\configs;
use App\Models\galerys;

class srsingle extends Controller
{
    public function index($id){
        $services = services::where('id', $id)->get();
        $choose = chooses::all();
        $configs = configs::all();
        return view('ser-single', compact('services', 'choose', 'configs'));
    }
    public function gallerySingle($id){
        $min_id = galerys::min('id');
        $max_id = galerys::max('id');
        $configs = configs::all();
        $gallerys = galerys::all();
        return view('gallery-single', compact('configs', 'id', 'gallerys', 'max_id', 'min_id'));
    }
}
