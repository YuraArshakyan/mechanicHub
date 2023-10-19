<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\appointments;
use App\Models\messages;

class appointment extends Controller
{
    public function index(Request $request){
        appointments::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'MMY' => $request->model,
            'service' => $request->service,
            'date' => $request->date,
            'time' => $request->time
        ]);
        return redirect()->back()->with('status', 'success');
    }

    public function message(Request $request){
        messages::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        return redirect()->back()->with('status', 'success');
    }

}
