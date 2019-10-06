<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function event(Request $request, $city, $year, $month)
    {
        // dd($request, $city, $year, $month);

        // 第一階段的測試
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
        $lists=array(
            "pingtung"=>array("location"=>"屏東","time"=>"2019年10月09日","distance"=>"21K-10K-5K","place"=>"屏東鎮","phone"=>"0800-271-000(工作日9:00~18:00)"),
            "changhua"=>array("location"=>"彰化","time"=>"2020年02月09日","distance"=>"21K-10K-5K","place"=>"彰化鎮","phone"=>"0800-272-000(工作日9:00~18:00)"),
            "newtaipei"=>array("location"=>"新北","time"=>"2019年11月09日","distance"=>"21K-10K-5K","place"=>"新北鎮","phone"=>"0800-273-000(工作日9:00~18:00)"),
            "kaohsiung"=>array("location"=>"高雄","time"=>"2019年12月09日","distance"=>"21K-10K-5K","place"=>"高雄鎮","phone"=>"0800-274-000(工作日9:00~18:00)"),
            "tainan"=>array("location"=>"台南","time"=>"2019年10月09日","distance"=>"21K-10K-5K","place"=>"台南鎮","phone"=>"0800-275-000(工作日9:00~18:00)"),
            "taoyuan"=>array("location"=>"桃園","time"=>"2019年11月09日","distance"=>"21K-10K-5K","place"=>"桃園鎮","phone"=>"0800-276-000(工作日9:00~18:00)"),
            "yilan"=>array("location"=>"宜蘭","time"=>"2020年01月09日","distance"=>"21K-10K-5K","place"=>"宜蘭鎮","phone"=>"0800-277-000(工作日9:00~18:00)"),
            "yunlin"=>array("location"=>"員林","time"=>"2019年9月09日","distance"=>"21K-10K-5K","place"=>"員林鎮","phone"=>"0800-278-000(工作日9:00~18:00)"),
            "taichung"=>array("location"=>"台中","time"=>"2019年12月09日","distance"=>"21K-10K-5K","place"=>"台中鎮","phone"=>"0800-279-000(工作日9:00~18:00)")
           );
        $list=$lists[$city];

        $viewModel = compact(
            "city",
            "year",
            "month",
            "list"
        );
        return view("event.index", $viewModel);

    }

    // public function event2(Request $request, $city,$year,$month,$page)
    // {   // 第一階段的測試
    //     // $view = "event.{$city}{$year}{$month}{$page}";
    //     // return view($view);
    // }

    public function event3(Request $request, $city,$year,$month,$page)
    {    // 第二階段的測試
        // $view = "event.{$page}";  
        // $viewModel = compact(
        //     "city",
        //     "year",
        //     "month",
        // );
        // return view($view, $viewModel);


       // 第三階段的測試
       $lists=array(
       "pingtung"=>array("location"=>"屏東","time"=>"2019年10月09日","distance"=>"21K-10K-5K","place"=>"屏東鎮","phone"=>"0800-271-000(工作日9:00~18:00)"),
       "changhua"=>array("location"=>"彰化","time"=>"2020年02月09日","distance"=>"21K-10K-5K","place"=>"彰化鎮","phone"=>"0800-272-000(工作日9:00~18:00)"),
       "newtaipei"=>array("location"=>"新北","time"=>"2019年11月09日","distance"=>"21K-10K-5K","place"=>"新北鎮","phone"=>"0800-273-000(工作日9:00~18:00)"),
       "kaohsiung"=>array("location"=>"高雄","time"=>"2019年12月09日","distance"=>"21K-10K-5K","place"=>"高雄鎮","phone"=>"0800-274-000(工作日9:00~18:00)"),
       "tainan"=>array("location"=>"台南","time"=>"2019年10月09日","distance"=>"21K-10K-5K","place"=>"台南鎮","phone"=>"0800-275-000(工作日9:00~18:00)"),
       "taoyuan"=>array("location"=>"桃園","time"=>"2019年11月09日","distance"=>"21K-10K-5K","place"=>"桃園鎮","phone"=>"0800-276-000(工作日9:00~18:00)"),
       "yilan"=>array("location"=>"宜蘭","time"=>"2020年01月09日","distance"=>"21K-10K-5K","place"=>"宜蘭鎮","phone"=>"0800-277-000(工作日9:00~18:00)"),
       "yunlin"=>array("location"=>"員林","time"=>"2019年9月09日","distance"=>"21K-10K-5K","place"=>"員林鎮","phone"=>"0800-278-000(工作日9:00~18:00)"),
       "taichung"=>array("location"=>"台中","time"=>"2019年12月09日","distance"=>"21K-10K-5K","place"=>"台中鎮","phone"=>"0800-279-000(工作日9:00~18:00)")
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
