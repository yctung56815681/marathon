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

class OrderGroupAdminController extends Controller
{
    function index(REQUEST $request){
        $userName = Session::get("userName", "Guest");
        if ($userName == "Guest") {
            return redirect("/login");
        }

        $obj = array();

        $id = 0;
        $num = DB::table("order_groups")->count();
        $og = DB::table("order_groups")->offset($id)->limit(10)->get();
        foreach ($og as $ogi) {
            $obj2 = new \stdClass();

            $obj2->idOrderGroup = $ogi->idOrderGroup;
            $obj2->orderGroupNo = $ogi->orderGroupNo;
            $obj2->orderGroupName = $ogi->orderGroupName;
            if ($ogi->orderGroupRevoke == 1)
                $obj2->orderGroupRevoke = "正常";
            else
                $obj2->orderGroupRevoke = "撤銷";

                $e = DB::table('events')
                ->join('order_groups', 'events.idEvent', '=', 'order_groups.eventId')
                ->where('order_groups.idOrderGroup', '=', $ogi->idOrderGroup)
                ->where('events.idEvent', '=', $ogi->eventId)
                ->first();
                
                // foreach ($e as $ei) {
                    $c = DB::table('cities')
                    ->join('events','cities.idCity',"=",'events.cityId')
                    ->where('events.idEvent', '=', $e->idEvent)
                    ->where('cities.idCity', '=', $e->cityId)
                    ->first();
                    
                    $obj2->cityNameCh = $c->cityNameCh;

            $o = DB::table('orders')
            ->join('order_groups', 'orders.orderGroupId', '=', 'order_groups.idOrderGroup')
            ->where('orders.orderGroupId', '=', $ogi->idOrderGroup)
            ->get();

            $obj2->order = array();

            foreach ($o as $oi) {
                $m = DB::table('members')
                ->join('orders','members.idMember',"=",'orders.memberId')
                ->where('orders.idOrder', '=', $oi->idOrder)
                ->where('members.idMember', '=', $oi->memberId)
                ->get();

                foreach ($m as $mi) {
                    array_push($obj2->order, $mi);
                }
            }
            array_push($obj, $obj2);
        }

        return view("orderGroupAdmin.index", compact('obj', 'num', 'id'));
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

        return view("orderGroupAdmin.create");//
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

        $obj = array();

        $num = DB::table("order_groups")->count();

        $og = DB::table("order_groups")->offset($id)->limit(10)->get();
        foreach ($og as $ogi) {
            $obj2 = new \stdClass();

            $obj2->idOrderGroup = $ogi->idOrderGroup;
            $obj2->orderGroupNo = $ogi->orderGroupNo;
            $obj2->orderGroupName = $ogi->orderGroupName;
            if ($ogi->orderGroupRevoke == 1)
                $obj2->orderGroupRevoke = "正常";
            else
                $obj2->orderGroupRevoke = "撤銷";

                
                $e = DB::table('events')
                ->join('order_groups', 'events.idEvent', '=', 'order_groups.eventId')
                ->where('order_groups.idOrderGroup', '=', $ogi->idOrderGroup)
                ->where('events.idEvent', '=', $ogi->eventId)
                ->first();
                
                // foreach ($e as $ei) {
                    $c = DB::table('cities')
                    ->join('events','cities.idCity',"=",'events.cityId')
                    ->where('events.idEvent', '=', $e->idEvent)
                    ->where('cities.idCity', '=', $e->cityId)
                    ->first();
                    
                    $obj2->cityNameCh = $c->cityNameCh;



            $o = DB::table('orders')
            ->join('order_groups', 'orders.orderGroupId', '=', 'order_groups.idOrderGroup')
            ->where('orders.orderGroupId', '=', $ogi->idOrderGroup)
            ->get();

            $obj2->order = array();

            foreach ($o as $oi) {
                $m = DB::table('members')
                ->join('orders','members.idMember',"=",'orders.memberId')
                ->where('orders.idOrder', '=', $oi->idOrder)
                ->where('members.idMember', '=', $oi->memberId)
                ->get();

                foreach ($m as $mi) {
                    array_push($obj2->order, $mi);
                }
            }
            array_push($obj, $obj2);

        }
// dd($obj);

        return view("orderGroupAdmin.index", compact('obj', 'num', 'id'));
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

        $obj = Order::find($id);
        return view ("orderGroupAdmin.edit", compact('obj'));
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


        // dd("============================================================");
        // $obj = OrderGroup::all();
        DB::table('order_groups')->where('order_groups.idOrderGroup',"=" ,$id)
        ->update(['orderGroupRevoke'=> 2]);

    //     if ($order_groups[$orderGroupRevoke]->level === 2)
    //     $order_groups[$orderGroupRevoke]->level = '撤銷';
    // else if ($order_groups[$orderGroupRevoke]->level === 1)
    //     $order_groups[$orderGroupRevoke]->level = '正常';
        // $obj->save();
        // return redirect("/orderGroupAdmin");
        DB::statement(DB::raw("set @row:=0"));
        $orderGroup = DB::table("order_groups")->select(DB::raw("@row := @row + 1 as rank"))->where("idOrderGroup", "<=", $id)->get();
        $idNew = $orderGroup->count() - 1;
        $idNew = floor($idNew / 10) * 10;
        return redirect("/orderGroupAdmin/$idNew");
    }
}