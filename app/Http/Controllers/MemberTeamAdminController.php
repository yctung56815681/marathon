<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Account;
use App\City;
use App\Event;
use App\Runs;
use App\EventContent;
use App\Organizer;
use App\Coorganizer;
use App\Member;
use App\Product;
use App\OrderGroup;
use App\Order;
use App\OrderDetail;

use Session;

class MemberTeamAdminController extends Controller
{
    public function index()
    {
        $userName = Session::get("userName", "Guest");
        if ($userName == "Guest") {
            return redirect("/login");
        }

        return view("memberTeamAdmin.index");
    }
}