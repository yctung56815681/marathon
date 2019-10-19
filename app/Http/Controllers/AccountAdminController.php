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

class AccountAdminController extends Controller
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

        $id = 0;
        $num = DB::table("accounts")->count();
        $account = DB::table("accounts")->offset($id)->limit(10)->get();
        return view("accountAdmin.index", compact("account", "num", "id"));
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

        return view("accountAdmin.create");
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

        $num = DB::table("accounts")->where("username", "=", $request->username)->count();
        if ($num != 0)
            return redirect("/accountAdmin/duplicateAccount");

        // DB::table("accounts")->insert(["username" => $request->username, "password" => $request->password]);
        $password = $request->password;
        $password = password_hash($password, PASSWORD_DEFAULT);
        DB::table("accounts")->insert(["username" => $request->username, "password" => $password]);
        $num = DB::table("accounts")->count();
        $id = floor(($num - 1) / 10) * 10;
        $account = DB::table("accounts")->offset($id)->limit(10)->get();
        return view("accountAdmin.index", compact("account", "num", "id"));
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

        $num = DB::table("accounts")->count();
        $account = DB::table("accounts")->offset($id)->limit(10)->get();
        return view("accountAdmin.index", compact("account", "num", "id"));
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

        $account = DB::table("accounts")->where("idAccount", "=", $id)->get();
        return view("accountAdmin.edit", compact("account", "id"));
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

        $account = DB::table("accounts")->where("idAccount", "=", $id)->get();
        $userNameUpdate = $account[0]->username;
        // DB::table("accounts")->where("idAccount", "=", $id)->update(["username" => $userNameUpdate, "password" => $request->password]);
        $password = $request->password;
        $password = password_hash($password, PASSWORD_DEFAULT);
        DB::table("accounts")->where("idAccount", "=", $id)->update(["username" => $userNameUpdate, "password" => $password]);

        DB::statement(DB::raw("set @row:=0"));
        $account = DB::table("accounts")->select(DB::raw("@row := @row + 1 as rank"))->where("idAccount", "<=", $id)->get();
        $idNew = $account->count() - 1;
        $idNew = floor($idNew / 10) * 10;
        $url = "/accountAdmin/" . $idNew;
        return redirect($url);
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

        DB::table("accounts")->where("idAccount", "=", $id)->delete();
        // return redirect("/accountAdmin");
        $num = DB::table("accounts")->count();
        DB::statement(DB::raw("set @row:=0"));
        $account = DB::table("accounts")->select(DB::raw("@row := @row + 1 as rank"))->where("idAccount", "<", $id)->get();
        $idNew = $account->count();
        if ($idNew == $num)
            $idNew -= 1;
        $idNew = floor($idNew / 10) * 10;
        $url = "/accountAdmin/" . $idNew;
        // dd($num, $account->count(), $idNew);
        return redirect($url);
    }

    public function duplicateAccount()
    {
        $userName = Session::get("userName", "Guest");
        if ($userName == "Guest") {
            return redirect("/login");
        }

        return view("accountAdmin.duplicateAccount");
    }
}
