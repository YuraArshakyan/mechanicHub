<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\services;
use App\Models\chooses;

class srsingle extends Controller
{
    public function index($id){
        $services = services::where('id', $id)->get();
        $choose = chooses::all();
        return view('ser-single', compact('services', 'choose'));
    }
}
