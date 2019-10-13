<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\events;
use App\event_contents;

class EventAdminController extends Controller
{
    public function create()
    {
        return view("eventAdmin.create");//
    
    }

    public function index()
    {
        // return view("eventMangerAdmin.index");//
        $eventsList = events::all();
        foreach($eventsList as $v){
            dd($$v);
        }
        exit;
        
        $eventsList->
        events::find($id);
        $eventsList = events::all();
        return view("eventAdmin.index", compact('eventsList'));
     
    }
    public function store(Request $request)
    {
        $eve = new events();
        $eve->eventTittle = $request->eventTittle;
        $eve->cityid = $request->cityid;
        $eve->eventAddr = $request->eventAddr;
        $eve->eventSignupStartTime = $request->eventSignupStartTime;
        $eve->eventSignupEndTime = $request->eventSignupEndTime;
        $eve->eventRunStartTime = $request->eventRunStartTime;
        $eve->eventRunEndTime = $request->eventRunEndTime;
        $eve->eventTel = $request->eventTel;
        $eve->eventImage = $request->eventImage;
        
                
        $eve->save();
        return redirect("/eventAdmin");   //
    }
    public function edit($id)
    {
        $eve = events::find($id);
        return view('eventAdmin.edit', compact('eve'));        //
    }
    public function update(Request $request,$id)
    {
        
        
        $eve = events::find($id);
        $eve->eventTittle = $request->eventTittle;
        $eve->cityid = $request->cityid;
        $eve->eventAddr = $request->eventAddr;
        $eve->eventSignupStartTime = $request->eventSignupStartTime;
        $eve->eventSignupEndTime = $request->eventSignupEndTime;
        $eve->eventRunStartTime = $request->eventRunStartTime;
        $eve->eventRunEndTime = $request->eventRunEndTime;
        $eve->eventTel = $request->eventTel;
        $eve->eventImage = $request->eventImage;
       
                
        $eve->save();
        return redirect("/eventAdmin");   //
    }
    public function destroy($id)
    {
        $eve = events::find($id);
        $eve->delete();
        return redirect("/eventAdmin");        //
    }
    ////////////////////////////////////////////////////////////
    // public function create()
    // {
    //     return view("eventAdmin.create");//
    
    // }

    // public function index()
    // {
    //     // return view("eventMangerAdmin.index");//
    //     $event_contentsList = event_contents::all();
    //     return view("eventAdmin.index", compact('event_contentsList'));
     
    // }
    // public function store(Request $request)
    // {
    //     $evect = new event_contents();
    //     $evect->events["eventTittle"] = $request->eventTittle;
    //     $evect->events["cityid"] = $request->cityid;
    //     $evect->events["eventAddr"] = $request->eventAddr;
    //     $evect->events["eventSignupStartTime"] = $request->eventSignupStartTime;
    //     $evect->events["eventSignupEndTime"] = $request->eventSignupEndTime;
    //     $evect->event["eventRunStartTime"] = $request->eventRunStartTime;
    //     $evect->event["eventRunEndTime"] = $request->eventRunEndTime;
    //     $evect->event["eventTel"] = $request->eventTel;
    //     $evect->event["eventImage"] = $request->eventImage;
        
                
    //     $evect->save();
    //     return redirect("/eventAdmin");   //
    // }
    // public function edit($id)
    // {
    //     $evect = event_contents::find($id);
    //     return view('eventAdmin.edit', compact('evect'));        //
    // }
    // public function update(Request $request,$id)
    // {
        
        
    //     $evect = event_contents::find($id);
    //     $evect->events["eventTittle"] = $request->eventTittle;
    //     $evect->events["cityid"] = $request->cityid;
    //     $evect->events["eventAddr"] = $request->eventAddr;
    //     $evect->events["eventSignupStartTime"] = $request->eventSignupStartTime;
    //     $evect->events["eventSignupEndTime"] = $request->eventSignupEndTime;
    //     $evect->event["eventRunStartTime"] = $request->eventRunStartTime;
    //     $evect->event["eventRunEndTime"] = $request->eventRunEndTime;
    //     $evect->event["eventTel"] = $request->eventTel;
    //     $evect->event["eventImage"] = $request->eventImage;
       
                
    //     $evect->save();
    //     return redirect("/eventAdmin");   //
    // }
    // public function destroy($id)
    // {
    //     $evect = event_contents::find($id);
    //     $evect->delete();
    //     return redirect("/eventAdmin");        //
    // }
}
