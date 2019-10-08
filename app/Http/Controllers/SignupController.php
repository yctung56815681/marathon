<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    //
    public function index(Request $request, $city, $year, $month)
    {
        $viewModel = compact(
            "city",
            "year",
            "month",
        );
        return view("signup.index", $viewModel);
    }
    public function action(Request $request, $city, $year, $month, $action)
    {
       
        $view = "signup.{$action}";
        $viewModel = compact(
            "city",
            "year",
            "month",
            "action"
        );
        return view($view, $viewModel);
    }
}