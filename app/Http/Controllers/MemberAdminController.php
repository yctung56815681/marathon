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

class MemberAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userName = Session::get("userName", "Guest");
        if ($userName == "Guest") {
            return redirect("/login");
        }

        // $memberList = Member::all();
        // return view('memberAdmin.index', compact('memberList'));

        $id = 0;
        $num = DB::table("members")->count();
        $memberList = DB::table("members")->offset($id)->limit(10)->get();
        return view("memberAdmin.index", compact("memberList", "num", "id"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userName = Session::get("userName", "Guest");
        if ($userName == "Guest") {
            return redirect("/login");
        }

        return view("memberAdmin.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userName = Session::get("userName", "Guest");
        if ($userName == "Guest") {
            return redirect("/login");
        }

        $mem = new Member();
        $mem->memberName = $request->memberName;
        $mem->memberTwId = $request->memberTwId;
        $mem->memberGender = $request->memberGender;
        $mem->memberYear = $request->memberYear;
        $mem->memberMonth = $request->memberMonth;
        $mem->memberDay = $request->memberDay;
        $mem->memberCity = $request->memberCity;
        $mem->memberTown = $request->memberTown;
        $mem->memberAddr = $request->memberAddr;
        $mem->memberEmail = $request->memberEmail;
        $mem->memberMobile = $request->memberMobile;
        $mem->memberEmergencyContact = $request->memberEmergencyContact;
        $mem->memberEmergencyRelationship = $request->memberEmergencyRelationship;
        $mem->memberEmergencyMobile = $request->memberEmergencyMobile;
        $mem->save();
        return redirect("/memberAdmin");

        // DB::statement(DB::raw("set @row:=0"));
        // $member = DB::table("members")->select(DB::raw("@row := @row + 1 as rank"))->where("idMember", "<=", $id)->get();
        // $idNew = $member->count() - 1;
        // $idNew = floor($idNew / 10) * 10;
        // return redirect("/memberAdmin/$idNew");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userName = Session::get("userName", "Guest");
        if ($userName == "Guest") {
            return redirect("/login");
        }

        // $mem = Member::find($id);
        // return view('memberAdmin.show', compact('mem'));

        $num = DB::table("members")->count();
        $memberList = DB::table("members")->offset($id)->limit(10)->get();
        return view("memberAdmin.index", compact("memberList", "num", "id"));
    }

    public function idShow($id)
    {
        $userName = Session::get("userName", "Guest");
        if ($userName == "Guest") {
            return redirect("/login");
        }

        $mem = Member::find($id);
        return view('memberAdmin.idShow', compact('mem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userName = Session::get("userName", "Guest");
        if ($userName == "Guest") {
            return redirect("/login");
        }

        $mem = Member::find($id);
        return view('memberAdmin.edit', compact('mem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $userName = Session::get("userName", "Guest");
        if ($userName == "Guest") {
            return redirect("/login");
        }

        $mem = Member::find($id);
        // $mem->memberName = $request->memberName;
        // $mem->memberTwId = $request->memberTwId;
        $mem->memberGender = $request->memberGender;
        $mem->memberYear = $request->memberYear;
        $mem->memberMonth = $request->memberMonth;
        $mem->memberDay = $request->memberDay;
        $mem->memberCity = $request->memberCity;
        $mem->memberTown = $request->memberTown;
        $mem->memberAddr = $request->memberAddr;
        $mem->memberEmail = $request->memberEmail;
        $mem->memberMobile = $request->memberMobile;
        $mem->memberEmergencyContact = $request->memberEmergencyContact;
        $mem->memberEmergencyRelationship = $request->memberEmergencyRelationship;
        $mem->memberEmergencyMobile = $request->memberEmergencyMobile;
        $mem->save();
        // return redirect("/memberAdmin");

        DB::statement(DB::raw("set @row:=0"));
        $member = DB::table("members")->select(DB::raw("@row := @row + 1 as rank"))->where("idMember", "<=", $id)->get();
        $idNew = $member->count() - 1;
        $idNew = floor($idNew / 10) * 10;
        return redirect("/memberAdmin/$idNew");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userName = Session::get("userName", "Guest");
        if ($userName == "Guest") {
            return redirect("/login");
        }

        $mem = Member::find($id);
        $mem->delete();
        // return redirect("/memberAdmin");

        DB::statement(DB::raw("set @row:=0"));
        $member = DB::table("members")->select(DB::raw("@row := @row + 1 as rank"))->where("idMember", "<=", $id)->get();
        $idNew = $member->count() - 1;
        $idNew = floor($idNew / 10) * 10;
        return redirect("/memberAdmin/$idNew");
    }
}
