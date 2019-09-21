<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimulateController extends Controller
{
    public function index()
    {
        return view("simulate.index");
    }
}
