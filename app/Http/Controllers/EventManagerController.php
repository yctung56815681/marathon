<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventManagerController extends Controller
{
    public function index()
    {
     
        return view('eventManager.index');
    }
    public function create()
    {
    
        return view('eventManager.create');
    }
    

}