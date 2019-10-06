<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Members;

class IndexController extends Controller
{
    public function index()
    {
        
        return view('index');
    }
}
