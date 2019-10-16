<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QueryController extends Controller
{
    //
    public function index(Request $request, $city, $year, $month)
    {
        $viewModel = compact(
            "city",
            "year",
            "month",
        );
        return view("query.index", $viewModel);
    }
   
}