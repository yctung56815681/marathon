<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Members;

class MemberAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membersList = Members::all();
        return view('memberAdmin.index', compact('membersList'));//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("memberAdmin.create");//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mem = new Members();
        $mem->name = $request->name;
        $mem->twId = $request->twId;
        $mem->sex = $request->sex;
        $mem->year = $request->year;
        $mem->month = $request->month;
        $mem->day = $request->day;
        $mem->city = $request->city;
        $mem->town = $request->town;
        $mem->address = $request->address;
        $mem->email = $request->email;
        $mem->cellPhone = $request->cellPhone;
        $mem->emName = $request->emName;
        $mem->emRelationship = $request->emRelationship;
        $mem->emCellphone = $request->emCellphone;
        $mem->save();
        return redirect("/memberAdmin");   //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mem = Members::find($id);
        return view('memberAdmin.edit', compact('mem'));        //
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
        $mem = Members::find($id);
        $mem->name = $request->name;
        $mem->twId = $request->twId;
        $mem->sex = $request->sex;
        $mem->year = $request->year;
        $mem->month = $request->month;
        $mem->day = $request->day;
        $mem->city = $request->city;
        $mem->town = $request->town;
        $mem->address = $request->address;
        $mem->email = $request->email;
        $mem->cellPhone = $request->cellPhone;
        $mem->emName = $request->emName;
        $mem->emRelationship = $request->emRelationship;
        $mem->emCellphone = $request->emCellphone;
        $mem->save();
        return redirect("/memberAdmin");        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emp = Members::find($id);
        $emp->delete();
        return redirect("/memberAdmin");        //
    }
}
