<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function event(Request $request, $city, $year, $month)
    {
        // // dd($request, $city, $year, $month);

        // $view = "event.{$city}{$year}{$month}";
        // // echo "city:" . $city . "<br>";
        // // echo "year:" . $year . "<br>";
        // // echo "month:" . $month . "<br>";
        // // echo "view:" . $view . "<br>";

        // // dd($city, $year, $month, $view);
        // return view($view);

        // $view = "$city";
        // dd($view);
        $viewModel = compact(
            "city",
            "year",
            "month",
        );
        return view("event.index", $viewModel);
    }

    public function action(Request $request, $city, $year, $month, $action)
    {
        $view = "event.{$action}";
        $viewModel = compact(
            "city",
            "year",
            "month",
            "action"
        );
        return view($view, $viewModel);
    }
}
