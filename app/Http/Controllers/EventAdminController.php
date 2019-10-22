<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\EventContent;
use App\Run;
use App\City;
use App\OrderGroup;
use Session;

class EventAdminController extends Controller
{
    public function create()
    {
        $userName = Session::get("userName", "Guest");
        if ($userName == "Guest") {
            return redirect("/login");
        }
        return view("eventAdmin.create");
    
    }

    public function index()
    {  
        $userName = Session::get("userName", "Guest");
        if ($userName == "Guest") {
            return redirect("/login");
        }
        
        $eventsList = Event::all();
        return view("eventAdmin.index", compact('eventsList'));
        
     
    }
    public function store(Request $request)
    {
        $userName = Session::get("userName", "Guest");
        if ($userName == "Guest") {
            return redirect("/login");
        }
      
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
        $runs->runType = "L";
        $runs->runName = $request->runNameL;
        $runs->runNameLong = $request->runNameLongL;
        $runs->runPrice = $request->runPriceL;
        $runs->save();

        $runs = new Run();
        $runs->eventId = $eve->idEvent;        
        $runs->runType = "M";
        $runs->runName = $request->runNameM;
        $runs->runNameLong = $request->runNameLongM;
        $runs->runPrice = $request->runPriceM;       
        $runs->save();

        $runs = new Run();
        $runs->eventId = $eve->idEvent;        
        $runs->runType = "S";
        $runs->runName = $request->runNameS;
        $runs->runNameLong = $request->runNameLongS;
        $runs->runPrice = $request->runPriceS;        
        $runs->save();

        
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
            "eventMethodtext2"=>"$request->eventMethodtext2"
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
        $userName = Session::get("userName", "Guest");
        if ($userName == "Guest") {
            return redirect("/login");
        }

        $eve = Event::find($idEvent);
        $city = City::where('idCity',$eve->cityId)->get();
        // dd($city[0]->cityNameCh);
        
        $runs = Run::where('eventId',$idEvent)->get();
        $evec = EventContent::where('eventId',$idEvent)->get();
        $ContentNews= $evec[0]->eventContentNews;
        $jsonNews = json_decode($ContentNews);

        $ContentSignup= $evec[0]->eventContentSignup;
        $jsonSignup = json_decode($ContentSignup);

        $ContentReward= $evec[0]->eventContentReward;
        $jsonReward = json_decode($ContentReward);

        $ContentActSpec= $evec[0]->eventContentActSpec;
        $jsonActSpec = json_decode($ContentActSpec);
        // dd($jsonNews->eventNewstext1);  
        //  
        return view('eventAdmin.edit', compact('eve','runs','evec','city','jsonNews','jsonSignup','jsonReward','jsonActSpec'));        //
    }
    public function update(Request $request,$idEvent)
    {   
        $userName = Session::get("userName", "Guest");
        if ($userName == "Guest") {
            return redirect("/login");
        }
        
        
        $eve = Event::find($idEvent);
        $eve->eventTittle = $request->eventTittle;
        
        $eve->eventAddr = $request->eventAddr;
        
        $eve->eventTel = $request->eventTel;
          
                
        $eve->save();

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        $runs = Run::Where('eventId',$idEvent)->get();
        // dd($runs[0]->eventId);
        // dd($runs); 
        $runs[0]->eventId = $idEvent;                   
        $runs[0]->runType = "L";
        $runs[0]->runName = $request->runNameL;
        $runs[0]->runNameLong = $request->runNameLongL;
        $runs[0]->runPrice = $request->runPriceL;        
        $runs[0]->save();
        // dd($runs->runPrice);
       
        $runs = Run::Where('eventId',$idEvent)->get();
        $runs[1]->eventId = $idEvent;        
        $runs[1]->runType = "M";
        $runs[1]->runName = $request->runNameM;
        $runs[1]->runNameLong = $request->runNameLongM;
        $runs[1]->runPrice = $request->runPriceM;       
        $runs[1]->save();

        $runs = Run::Where('eventId',$idEvent)->get();
        $runs[2]->eventId = $idEvent;        
        $runs[2]->runType = "S";
        $runs[2]->runName = $request->runNameS;
        $runs[2]->runNameLong = $request->runNameLongS;
        $runs[2]->runPrice = $request->runPriceS;        
        $runs[2]->save();

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        $evec = EventContent::find($idEvent);       
        $evec->eventId = $idEvent;
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
    public function destroy($idEvent)
    {   
        // dd($idEvent);
        $userName = Session::get("userName", "Guest");
        if ($userName == "Guest") {
            return redirect("/login");
        }
        $orderlist = OrderGroup::all();
        //  dd($orderlist);
        
            foreach($orderlist as $k=>$ord){
                // dd($ord);
                if($ord->eventId==$idEvent)goto END;
                
            } 
            $runs = Run::Where('eventId',$idEvent)->get();
            $runs[0]->delete();
            $runs = Run::Where('eventId',$idEvent)->get();
            $runs[0]->delete();
            $runs = Run::Where('eventId',$idEvent)->get();
            $runs[0]->delete();
            $evec = EventContent::find($idEvent);
            $evec->delete();
            $eve = Event::find($idEvent);
            $eve->delete();
            return redirect("/eventAdmin"); 
            END:
            echo("網頁已有報名者不得刪除");

   
        
        

        
        
        
               //
    }
    ////////////////////////////////////////////////////////////
    
}
