<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
 

use App\Http\Controllers\Controller;
use App\HolidayHomework;
use App\News;

class HomeController extends Controller
{
    public function index()
    {
        
       $news = News::orderBy('id','desc')->get();

        return view('front.index', compact('news'));
    }

    public function about()
    {
        return view('front.about');
    }

    public function mission()
    {
        return view('front.vision-mission');
    }

    public function chairman()
    {
        return view('front.chairman-message');
    }
    public function holiday()
    {
        $holidayhomeworks =  HolidayHomework::orderBy('id','desc')->paginate(10);
        return view('front.holiday-homework',compact('holidayhomeworks'));
    }
     public function holiday2()
    {
        $holidayhomeworks =  HolidayHomework::orderBy('id','desc')->paginate(10);
        return view('front.holiday-homework2',compact('holidayhomeworks'));
    }

    public function art()
    {
        return view('front.art-craft');
    }

   
    public function dance()
    {
        return view('front.dance');
    }

   
    public function music()
    {
        return view('front.music');
    }

    public function kitty()
    {
        return view('front.kitty');
    }

    public function mini()
    {
        return view('front.mini-theater');
    }
  
    public function smart()
    {
        return view('front.smart-class-rooms');
    }
  
    public function computer()
    {
        return view('front.computer-lab');
    }
     public function science()
    {
        return view('front.science-lab');
    }
     public function library()
    {
        return view('front.library');
    }
     public function counselling()
    {
        return view('front.counselling-area');
    }
     public function transport()
    {
        return view('front.transport');
    }
     public function indoor()
    {
        return view('front.indoor-sports');
    }
     public function outdoor()
    {
        return view('front.outoor-sports');
    }
     public function yoga()
    {
        return view('front.yoga-aerobics');
    } 
    public function taekwondo()
    {
        return view('front.taekwondo');
    }
     public function tour()
    {
        return view('front.tour-trips');
    }
    
    public function adventure()
    {
        return view('front.adventure-land');
    }
    public function ganesha()
    {
        return view('front.ganesha');
    }
    public function highway()
    {
        return view('front.rang-highway');
    }
    public function tickLing()
    {
        return view('front.rang-tickLing');
    }
 
    public function activities()
    {
        return view('front.class-room-activities');
    }
     public function medi()
    {
        return view('front.medi-care');
    }
    public function diwali()
    {
        return view('front.diwali');
    }
     public function white()
    {
        return view('front.white-day');
    }
     public function blue()
    {
        return view('front.blue-day');
    }
     public function yellow()
    {
        return view('front.yellow-day');
    }
    //  public function activities()
    // {
    //     return view('front.class-room-activities');
    // }
    
    
     public function gallery()
    {
     $galleries = Gallery::orderBy('id','desc')->paginate(8);       
        
        return view('front.gallery',compact('galleries'));
         
    }
      public function other()
    {
        return view('front.other-evets');
    }
    
}    
