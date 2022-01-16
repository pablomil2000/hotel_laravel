<?php

namespace App\Http\Controllers;

use App\Models\RoomsCategory;
use App\Models\slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $sliders = slider::all();
        $RoomsDetails = RoomsCategory::all();
        return view('home', compact('sliders','RoomsDetails'));
    }
}
