<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;
use App\City;
use App\Event;
use App\EventContent;
use App\Run;

class EventController extends Controller
{
    
    public function event(Request $request, $city, $year, $month)
    {   // 第一階段的測試
        // $view = "event.{$city}{$year}{$month}";
        // return view($view);

        // 第二階段的測試
        // $viewModel = compact(
        //     "city",
        //     "year",
        //     "month",
        // );
        // return view("event.index", $viewModel);


        // 第三階段的測試
        // $lists=array(
        //     "PCH"=>array("location"=>"屏東","time"=>"2019年10月09日","distance"=>"21K-10K-5K","place"=>"屏東鎮","phone"=>"0800-271-000(工作日9:00~18:00)"),
        //     "CWH"=>array("location"=>"彰化","time"=>"2020年02月09日","distance"=>"21K-10K-5K","place"=>"彰化鎮","phone"=>"0800-272-000(工作日9:00~18:00)"),
        //     "TPH"=>array("location"=>"新北","time"=>"2019年11月09日","distance"=>"21K-10K-5K","place"=>"新北鎮","phone"=>"0800-273-000(工作日9:00~18:00)"),
        //     "KHH"=>array("location"=>"高雄","time"=>"2019年12月09日","distance"=>"21K-10K-5K","place"=>"高雄鎮","phone"=>"0800-274-000(工作日9:00~18:00)"),
        //     "TNN"=>array("location"=>"台南","time"=>"2019年10月09日","distance"=>"21K-10K-5K","place"=>"台南鎮","phone"=>"0800-275-000(工作日9:00~18:00)"),
        //     "TYC"=>array("location"=>"桃園","time"=>"2019年11月09日","distance"=>"21K-10K-5K","place"=>"桃園鎮","phone"=>"0800-276-000(工作日9:00~18:00)"),
        //     "ILN"=>array("location"=>"宜蘭","time"=>"2020年01月09日","distance"=>"21K-10K-5K","place"=>"宜蘭鎮","phone"=>"0800-277-000(工作日9:00~18:00)"),
        //     "YUN"=>array("location"=>"員林","time"=>"2019年9月09日","distance"=>"21K-10K-5K","place"=>"員林鎮","phone"=>"0800-278-000(工作日9:00~18:00)"),
        //     "TXG"=>array("location"=>"台中","time"=>"2019年12月09日","distance"=>"21K-10K-5K","place"=>"台中鎮","phone"=>"0800-279-000(工作日9:00~18:00)")
        //    );
        // $list=$lists[$city];
        // $viewModel = compact(
        //     "city",
        //     "year",
        //     "month",
        //     "list"
        // );
        // return view("event.index", $viewModel);


        // 第四階段的測試
        $lists=array(
            "PCH"=>array("location"=>"屏東","time"=>"2019年10月09日","distance"=>"21K-10K-5K","place"=>"屏東鎮","phone"=>"0800-271-000(工作日9:00~18:00)"),
            "CWH"=>array("location"=>"彰化","time"=>"2020年02月09日","distance"=>"21K-10K-5K","place"=>"彰化鎮","phone"=>"0800-272-000(工作日9:00~18:00)"),
            "TPH"=>array("location"=>"新北","time"=>"2019年11月09日","distance"=>"21K-10K-5K","place"=>"新北鎮","phone"=>"0800-273-000(工作日9:00~18:00)"),
            "KHH"=>array("location"=>"高雄","time"=>"2019年12月09日","distance"=>"21K-10K-5K","place"=>"高雄鎮","phone"=>"0800-274-000(工作日9:00~18:00)"),
            "TNN"=>array("location"=>"台南","time"=>"2019年10月09日","distance"=>"21K-10K-5K","place"=>"台南鎮","phone"=>"0800-275-000(工作日9:00~18:00)"),
            "TYC"=>array("location"=>"桃園","time"=>"2019年11月09日","distance"=>"21K-10K-5K","place"=>"桃園鎮","phone"=>"0800-276-000(工作日9:00~18:00)"),
            "ILN"=>array("location"=>"宜蘭","time"=>"2020年01月09日","distance"=>"21K-10K-5K","place"=>"宜蘭鎮","phone"=>"0800-277-000(工作日9:00~18:00)"),
            "YUN"=>array("location"=>"員林","time"=>"2019年9月09日","distance"=>"21K-10K-5K","place"=>"員林鎮","phone"=>"0800-278-000(工作日9:00~18:00)"),
            "TXG"=>array("location"=>"台中","time"=>"2019年12月09日","distance"=>"21K-10K-5K","place"=>"台中鎮","phone"=>"0800-279-000(工作日9:00~18:00)")
           );
        $list=$lists[$city];


        // 手動設ID連結表單+搜尋特定資料:
        // $cityId=City::all()->where('cityNo', "TXG" )->first()->idCity;
        // $cityNameCh=City::all()->where('cityId', "城市代號" )->first()->cityNameCh;

        // $idEvent=Event::all()->where('cityId', $cityId )->first()->idEvent;
        // $eventTel=Event::all()->where('cityId', $cityId )->first()->eventTel;
        // $eventSignupStartTime=Event::all()->where('cityId', $cityId )->first()->eventSignupEndTime;
        // $eventRunStartTime=Event::all()->where('cityId', $cityId )->first()->eventRunStartTime;
        // $eventRunStartTimeF=date("Y年m月d日", strtotime($eventRunStartTime) );
        

        // $jsonContent1=EventContent::all()->where('eventId', $idEvent )->first()->eventContentNews;
        
        // $eventContent1=json_decode($jsonContent1);
        // dd( $eventContent1->eventNewsImage);

        // $idRun=Run::all()->where('eventId', $idEvent )->first()->idRun;     
        // $eventD1=Run::all()->where('eventId', $eventId )->find($runId)->runName;
        // $eventD2=Run::all()->where('eventId', $eventId )->find($runId+1)->runName;
        // $eventD3=Run::all()->where('eventId', $eventId )->find($runId+2)->runName;


        // 自動ID連結表單+搜尋特定資料(還在測試):
        // $cityId1=City::all()->where('cityId', "TPE" )->first()->events->id;
        // $jsondata=City::all()->where('cityId', "TPE" )->first()->event_contents[0]->eventContentNews;
        // $cityId2=json_decode($jsondata, true);
        // $cityId3=City::all()->where('cityId', "TPE" )->first()->runs[0]->id;

        // $test="<img src='/img/pt02.jpg' style='width: 100%; max-width: 100%;' />";
        // $test='<img src="/img/pt02.jpg" style="width: 100%; max-width: 100%;" />';
        // 方法內測試""和''互換OK，但在MYSQK的JASON格式中連建立都不可-> (文章區塊與IMG標籤之'要加\)
        
        $viewModel = compact(
            "city",
            "year",
            "month",
            "list",
            // "jsonContent1"
            // "jsondata"
            // "eventContent1"
        );
        return view("event.index", $viewModel);

    }




    public function event3(Request $request, $city,$year,$month,$page)
    {   // 第一階段的測試
        // $view = "event.{$city}{$year}{$month}{$page}";
        // return view($view);
        
        // 第二階段的測試
        // $view = "event.{$page}";  
        // $viewModel = compact(
        //     "city",
        //     "year",
        //     "month",
        // );
        // return view($view, $viewModel);

       // 第三階段的測試
       $lists=array(
        "PCH"=>array("location"=>"屏東","time"=>"2019年10月09日",      "distance"=>"21K-10K-5K","place"=>"屏東鎮","phone"=>"0800-271-000(工作日9:00~18:00)"),
        "CWH"=>array("location"=>"彰化","time"=>"2020年02月09日","distance"=>"21K-10K-5K","place"=>"彰化鎮","phone"=>"0800-272-000(工作日9:00~18:00)"),
        "TPH"=>array("location"=>"新北","time"=>"2019年11月09日","distance"=>"21K-10K-5K","place"=>"新北鎮","phone"=>"0800-273-000(工作日9:00~18:00)"),
        "KHH"=>array("location"=>"高雄","time"=>"2019年12月09日","distance"=>"21K-10K-5K","place"=>"高雄鎮","phone"=>"0800-274-000(工作日9:00~18:00)"),
        "TNN"=>array("location"=>"台南","time"=>"2019年10月09日","distance"=>"21K-10K-5K","place"=>"台南鎮","phone"=>"0800-275-000(工作日9:00~18:00)"),
        "TYC"=>array("location"=>"桃園","time"=>"2019年11月09日","distance"=>"21K-10K-5K","place"=>"桃園鎮","phone"=>"0800-276-000(工作日9:00~18:00)"),
        "ILN"=>array("location"=>"宜蘭","time"=>"2020年01月09日","distance"=>"21K-10K-5K","place"=>"宜蘭鎮","phone"=>"0800-277-000(工作日9:00~18:00)"),
        "YUN"=>array("location"=>"員林","time"=>"2019年9月09日","distance"=>"21K-10K-5K","place"=>"員林鎮","phone"=>"0800-278-000(工作日9:00~18:00)"),
        "TXG"=>array("location"=>"台中","time"=>"2019年12月09日","distance"=>"21K-10K-5K","place"=>"台中鎮","phone"=>"0800-279-000(工作日9:00~18:00)")
       );
       $list=$lists[$city];
       $view = "event.{$page}"; 
       $viewModel = compact(
          "city",
          "year",
          "month",
          "list"
       );
       return view($view, $viewModel);




    }

    
}
