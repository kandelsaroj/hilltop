<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\about;
use App\Models\slider;
use App\Models\menu;
use App\Models\our_special;
use App\Models\why_choose_us;
use App\Models\menu_catagory;
use App\Models\event;
use App\Models\testimonials;


class FrontendController extends Controller
{
   
     public function mainFunction()
    {
        $about= about::all();
        $slider= slider::all();
        $menu = menu::all();
        $why_choose_us= why_choose_us::all();
        $our_special= our_special::all();
        $menu_category= menu_catagory::all();
        $event= event::all();
        $testimonial= testimonials::all();

        return view('index', compact('about','slider','menu','why_choose_us','our_special','menu_category','event','testimonial'));
        
    }
    
    
}
