<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamSignupController extends Controller
{
    //
    public function index(Request $request, $city, $year, $month)
    {
        $viewModel = compact(
            "city",
            "year",
            "month"
        );
        return view("teamSignup.index", $viewModel);
    }
    public function action(Request $request, $city, $year, $month, $action)
    {

        $view = "teamSignup.{$action}";
        $viewModel = compact(
            "city",
            "year",
            "month",
            "action"
        );
        return view($view, $viewModel);
    }
}