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

class OrderAdminController extends Controller
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

        $obj = new \stdClass();

        $order = DB::table('orders')
        ->where('orders.idOrder', '=', $id)
        ->get()->first();
        $obj->order = $order;

         // $obj->order->orderRevoke = $order->orderRevoke;
         if ($order->orderRevoke == 1)
         $order->orderRevoke = "正常";
         else
         $order->orderRevoke = "撤銷";

        $member = DB::table('members')
        ->where('members.idMember', '=', $order->memberId)
        ->get()->first();
        $obj->member = $member;

        $orderGroup = DB::table('order_groups')
        ->where('order_groups.idOrderGroup', '=', $order->orderGroupId)
        ->get()->first();
        $obj->orderGroup = $orderGroup;

        $event = DB::table('events')
        ->where('events.idEvent', '=', $orderGroup->eventId)
        ->get()->first();
        $obj->event = $event;

        $run = DB::table('runs')
        ->where('runs.idRun', '=', $order->runId)
        ->get()->first();
        $obj->run = $run;

        $orderDetail = DB::table('order_details')
        ->where('order_details.orderId', '=', $order->idOrder)
        ->get();
        $obj->orderDetail = $orderDetail;

        $obj->product = array();
        foreach ($orderDetail as $item) {
            $product = DB::table('products')
            ->where('products.idProduct', '=', $item->productId)
            ->get()->first();

            array_push($obj->product, $product);
        }

        $obj->totalPrice = DB::table('products')
            ->join('order_details', 'order_details.productId', '=', 'products.idProduct')
            ->join('orders', 'orders.idOrder', '=', 'order_details.orderId')
            ->where('orders.idOrder', '=', $id)
            ->sum('productPrice');
        $obj->totalPrice += $run->runPrice;

        // dd($obj);
        return view ("orderAdmin.show", compact('obj'));
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

        DB::table('orders')
        ->where('orders.idOrder',"=" ,$id)
        ->update(['orderRevoke'=> 2]);

        $order = DB::table('orders')
        ->where('orders.idOrder', '=', $id)
        ->get()->first();

        $orderAll = DB::table('orders')
        ->where('orders.orderGroupId', '=', $order->orderGroupId)
        ->get();

        $revoke = 1;
        foreach($orderAll as $oi) {
            if ($oi->orderRevoke != "2")
                $revoke = 0;
        }

        if ($revoke == 1) {
            DB::table('order_groups')
            ->where('order_groups.idOrderGroup',"=" ,$order->orderGroupId)
            ->update(['orderGroupRevoke'=> 2]);
        }

        // return redirect("/orderGroupAdmin");
        DB::statement(DB::raw("set @row:=0"));
        $orderGroup = DB::table("order_groups")->select(DB::raw("@row := @row + 1 as rank"))->where("idOrderGroup", "<=", $order->orderGroupId)->get();
        $idNew = $orderGroup->count() - 1;
        $idNew = floor($idNew / 10) * 10;
        return redirect("/orderGroupAdmin/$idNew");
    }
}
