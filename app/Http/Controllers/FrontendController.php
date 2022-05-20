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
// use App\Models\our_special;
use App\Models\ourspecial_category;


class FrontendController extends Controller
{
   
     public function mainFunction()
    {
     
    //    $about= about::latest()-> take(1);
    // $about = new about;
    //    $about = about::where('about',$about)->first();
    //    $about = about::limit(1)-> get();
       $about = about::limit(1)->orderBy('created_at', 'DESC')-> get();
        $menu = menu::all(); 
        $slider = slider::limit(1)->orderBy('created_at', 'DESC')-> get();
        $why_choose_us= why_choose_us::all();
        $our_special= our_special::all();
        $menu_category= menu_catagory::all();
        $event= event::all();
        $testimonial= testimonials::all();
        $ourspecial_category = ourspecial_category::all();
        $our_special = our_special::all();

        return view('index', compact('about','slider','menu','why_choose_us','our_special', 'ourspecial_category','menu_category','event','testimonial'));
        
    }
    
    
}
