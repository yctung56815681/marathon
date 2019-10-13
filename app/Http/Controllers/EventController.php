<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use DB;
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

        // 手動設ID連結表單+搜尋特定資料
        // $cityId=City::all()->where('cityId', "TPE" )->first()->id;
        // $eventId=Event::all()->where('cityId', $cityId )->first()->id;
        // $jsonContent1=EventContent::all()->where('eventId', $eventId )->first()->eventContentNews;
        // $eventContent1=json_decode($jsonContent1, true);
        // $eventD1=Run::all()->where('eventId', $eventId )->find(1)->runName;
        // $eventD2=Run::all()->where('eventId', $eventId )->find(2)->runName;
        // $eventD3=Run::all()->where('eventId', $eventId )->find(3)->runName;

        $viewModel = compact(
            "city",
            "year",
            "month",
            "list"
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
