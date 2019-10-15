<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\EventContent;
use App\Run;

class EventAdminController extends Controller
{
    public function create()
    {
        return view("eventAdmin.create");
    
    }

    public function index()
    {
        
        $eventsList = Event::all();
        return view("eventAdmin.index", compact('eventsList'));
        
     
    }
    public function store(Request $request)
    {
      
        $eve = new Event();
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

        $runs = new Run();
        $runs->eventId = $eve->idEvent;        
        $runs->runType = 1;
        $runs->runName = $request->runNameL;
        $runs->runNameLong = $request->runNameLongL;
        $runs->runPrice = $request->runPriceL;
        $runs->save();

        $runs = new Run();
        $runs->eventId = $eve->idEvent;        
        $runs->runType = 2;
        $runs->runName = $request->runNameM;
        $runs->runNameLong = $request->runNameLongM;
        $runs->runPrice = $request->runPriceM;       
        $runs->save();

        $runs = new Run();
        $runs->eventId = $eve->idEvent;        
        $runs->runType = 3;
        $runs->runName = $request->runNameS;
        $runs->runNameLong = $request->runNameLongS;
        $runs->runPrice = $request->runPriceS;        
        $runs->save();

        // $evec = new event_contents();
        // $evec->eventId = $eve->id;
        // $A = $request->eventNewsImage;
        // $B = $request->eventNewstext1;
        // $C = $request->eventNewstext2;
        // $evec->eventContentNews = "{'eventNewsImage':".$A."},{".$B."},{".$C."}";

        // $D = $request->eventMethodImage;
        // $E = $request->eventMethodtext1;
        // $F = $request->eventMethodtext2;
        // $evec->eventContentSignup = "{".$D."},{".$E."},{".$F."}";

        // $G = $request->eventRaceImage;
        // $H = $request->eventRacetext1;
        // $I = $request->eventRacetext2;
        // $evec->eventContentReward = "[{".$G."},{".$H."},{".$I."}]";

        // $J = $request->eventRuleImage;
        // $K = $request->eventRuletext1;
        // $L = $request->eventRuletext1;
        // $evec->eventContentActSpec = "[{".$J."},{".$K."},{".$L."}]";

        // $evec->save();

        $evec = new EventContent();
        $evec->eventId = $eve->idEvent;
        $eventContentNewsToJSON = [
            "eventNewsImage"=>"$request->eventNewsImage",
            "eventNewstext1"=>"$request->eventNewstext1",
            "eventNewstext2"=>"$request->eventNewstext2"
        ];
        $evec->eventContentNews = json_encode($eventContentNewsToJSON);
        
        $eventContentSignupToJSON = [
            "eventMethodImage"=>"$request->eventMethodImage",
            "eventMethodtext1"=>"$request->eventMethodtext1",
            "eventMethodtext1"=>"$request->eventMethodtext2"
        ];
        $evec->eventContentSignup = json_encode($eventContentSignupToJSON);

        $eventContentRewardToJSON = [
            "eventRaceImage"=>"$request->eventRaceImage",
            "eventRacetext1"=>"$request->eventRacetext1",
            "eventRacetext2"=>"$request->eventRacetext2"
        ];
        $evec->eventContentReward = json_encode($eventContentRewardToJSON);

        $eventContentActSpecToJSON = [
            "eventRuleImage"=>"$request->eventRuleImage",
            "eventRuletext1"=>"$request->eventRuletext1",
            "eventRuletext2"=>"$request->eventRuletext2"
        ];
        $evec->eventContentActSpec = json_encode($eventContentActSpecToJSON);
        $evec->save();
        
        

        
                
        
        return redirect("/eventAdmin");   //
    }
    public function edit($idEvent)
    {
        $eve = Event::find($idEvent);
        $runs = Run::where('eventId',$idEvent)->get();
        $evec = EventContent::where('eventId',$idEvent)->get(); 
        dd($evec[0]->eventContentNews);  
         
        return view('eventAdmin.edit', compact('eve','runs','evec'));        //
    }
    public function update(Request $request,$idEvent)
    {
        
        
        $eve = Event::find($idEvent);
        // $eve->eventTittle = $request->eventTittle;
        // $eve->cityid = $request->cityid;
        // $eve->eventAddr = $request->eventAddr;
        // $eve->eventSignupStartTime = $request->eventSignupStartTime;
        // $eve->eventSignupEndTime = $request->eventSignupEndTime;
        // $eve->eventRunStartTime = $request->eventRunStartTime;
        // $eve->eventRunEndTime = $request->eventRunEndTime;
        // $eve->eventTel = $request->eventTel;
        // $eve->eventImage = $request->eventImage;      
                
        $eve->save();

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // $runs = Run::where('eventId',$id);
        // $runs->eventId = $eve->id;
        // $keep = $runs->id;        
        // $runs->runType = "L";
        // $runs->runName = $request->runNameL;
        // $runs->runNameLong = $request->runNameLongL;
        // $runs->runPrice = $request->runPriceL;
        // $runs->save();
       
        // $runs = Run::where('eventId',$id);
        // $runs->eventId = $eve->id;        
        // $runs->runType = "M";
        // $runs->runName = $request->runNameM;
        // $runs->runNameLong = $request->runNameLongM;
        // $runs->runPrice = $request->runPriceM;       
        // $runs->save();

        // $runs = Run::find($eventId);
        // $runs->eventId = $eve->id;        
        // $runs->runType = "S";
        // $runs->runName = $request->runNameS;
        // $runs->runNameLong = $request->runNameLongS;
        // $runs->runPrice = $request->runPriceS;        
        // $runs->save();

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        $evec = EventContent::where('eventId',$idEvent);
        $cart = json_decode($evec->eventContentNews);
        $evec->eventContentNews="123" ;
        // $eventNewstext1="798";
       
        // $evec->eventId = $eve->id;
        // $eventContentNewsToJSON = [
        //     "eventNewsImage"=>"$request->eventNewsImage",
        //     "eventNewstext1"=>"$request->eventNewstext1",
        //     "eventNewstext2"=>"$request->eventNewstext2"
        // ];
        // $evec->eventContentNews1 = json_encode($eventContentNewsToJSON);
        // $json = json_decode($evec->eventContentNews1);
        // $evec->eventContentNews = $json->eventNewstext1;

        // $eventContentSignupToJSON = [
        //     "eventMethodImage"=>"$request->eventMethodImage",
        //     "eventMethodtext1"=>"$request->eventMethodtext1",
        //     "eventMethodtext1"=>"$request->eventMethodtext2"
        // ];
        // $evec->eventContentSignup = json_encode($eventContentSignupToJSON);

        // $eventContentRewardToJSON = [
        //     "eventRaceImage"=>"$request->eventRaceImage",
        //     "eventRacetext1"=>"$request->eventRacetext1",
        //     "eventRacetext2"=>"$request->eventRacetext2"
        // ];
        // $evec->eventContentReward = json_encode($eventContentRewardToJSON);

        // $eventContentActSpecToJSON = [
        //     "eventRuleImage"=>"$request->eventRuleImage",
        //     "eventRuletext1"=>"$request->eventRuletext1",
        //     "eventRuletext2"=>"$request->eventRuletext2"
        // ];
        // $evec->eventContentActSpec = json_encode($eventContentActSpecToJSON);
        $evec->save();

        return redirect("/eventAdmin");   //
    }
    public function destroy($idEvent)
    {
        $eve = Event::find($idEvent);
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
