<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class UiController extends Controller
{
    public function index()
    {
        $userName = Session::get("userName", "Guest");
        if ($userName == "Guest") {
            return redirect("/login");
        }

        return view("ui.ui", compact("userName"));
    }
}
