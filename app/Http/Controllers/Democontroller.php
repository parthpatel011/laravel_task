<?php

namespace App\Http\Controllers;

use App\Models\Demo2;
use Illuminate\Http\Request;

class Democontroller extends Controller
{
    public function demo(){
        $demo = Demo2::all();
        return view('demo', compact('demo'));

    }
}
