<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Members;
use App\Event;
use App\EventContent;
use App\Run;
use App\City;

class IndexController extends Controller
{
    public function index()
    {
        $Event = Event::all();
        // dd($Event[0]->eventTittle);
        // $array = [];
        
        // dd($array);   
        foreach($Event as $k=>$eve){
            
            // dd($eve->idEvent);
            
            // dd ($k);
            $slipt = $eve->eventImage;
            // echo($slipt);
            $city[$k] = substr_replace ( $slipt , "" , 3 , 10 );
            //  dd($city);
            $yearStr = substr_replace ( $slipt , "" , 0 , 3 );        
            $year[$k] = substr_replace ( $yearStr , "" , 4 , 6 );
            // dd($year);
            $monthStr = substr_replace ( $yearStr , "" , 0 , 4 );
            $month[$k] = substr_replace ( $monthStr , "" , 2 , 4 );

            // dd($month);
            // dd($city."/".$year."/".$month);
            // $URL = $city."/".$year."/".$month;
            // dd($URL); 
            
            // dd(slipt)
         
            // $array=[$city,$year,$month];


           
            
           
        };
        // 
        $EventContent = EventContent::all();        
        $Run = Run::all();
        $City = City::all();
        
        // dd($City);
            
        
        // dd($array);
     
        // dd($Run);
         
        // dd($slipt );       
        // dd($slipt);
        // dd( substr_replace ( $slipt , "" , 3 , 10 ));
        
       
       
          
        return view('index', compact('Event','EventContent','Run','City','city','year','month'));
    }

    public function eventsList()
    {
        
        return response()->json(Event::all(), 200);
        
    }

    public function eventsContentsList()
    {
        
        return response()->json(EventContent::all(), 200);
        
    }

    public function citiesList()
    {
        
        return response()->json(City::all(), 200);
        
    }

    public function runsList()
    {
        
        return response()->json(Run::all(), 200);
        
    }
}
