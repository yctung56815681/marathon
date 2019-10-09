<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QueryController extends Controller
{
    //
    public function index()
    {
       
        return view("query.index");
    }
    public function action(Request $request, $action)
    {
       
        $view = "query.{$action}";
        $viewModel = compact(
            "action"
        );
        return view($view, $viewModel);
    }
}