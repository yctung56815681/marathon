<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberApiController extends Controller
{
    //
    public function show(Request $request)
    {

        $query = DB::table("orders")
            ->join("members","memberId","=","idMember")
            ->join("order_details","idOrder","=","orderId")
            ->join("runs","runId","=","idRun")
            ->join("products","productId","=","idProduct")
            ->select("members.*","orders.orderNo","runs.*","products.*")
            ->where("memberTwId", $request->memberTwId)->get();

        return $query;
    }

    public function add(Request $request)
    {
        $members = DB::table("members")->insertGetId(
            [
                "memberTwId" => $request->memberTwId,
                "memberName" => $request->memberName,
                "memberGender" => $request->memberGender,
                "memberYear" => $request->memberYear,
                "memberMonth" => $request->memberMonth,
                "memberDay" => $request->memberDay,
                "memberCity" => $request->memberCity,
                "memberTown" => $request->memberTown,
                "memberAddr" => $request->memberAddr,
                "memberEmail" => $request->memberEmail,
                "memberMobile" => $request->memberMobile,
                "memberEmergencyContact" => $request->memberEmergencyContact,
                "memberEmergencyRelationship" => $request->memberEmergencyRelationship,
                "memberEmergencyMobile" => $request->memberEmergencyMobile,
            ]
        );

        $orders = DB::table("orders")->insertGetId(
            [
                "orderNo" => $request->orderNo,
                "orderStatus" => $request->orderStatus,
                "orderRevoke" => $request->orderRevoke,
                "runId" => $request->runId,
                "memberId" =>  $members,
                "orderGroupId" => $request->orderGroupId
            ]
        );

        $arr = preg_split('/\,/', $request->productId);
        foreach ($arr as $i) {
            DB::table("order_details")->insert(
                [
                    "orderId" => $orders,
                    "productId" => $i,
                ]
            );
        };
    }
    public function teamAdd(Request $request)
    {
    //     $events =  DB::table("events")
    //     ->join("cities","idCity","=","cityId")
    //     ->select("events.idEvent")
    //     ->where("cityNo",$request->cityNo)->get("events.idEvent");
    //     // $events = DB::table("events")->get("idEvent");
    //     return $events;
        
        $order_groups = DB::table("order_groups")
        ->insertGetId(
            [
                "orderGroupNo" => $request->orderGroupNo,
                "orderGroupName" => $request->orderGroupName,
                "eventId" =>  $request->eventId
            ]
        );
        return $order_groups;
    }
    public function addProduct() {
        $product =  DB::table("products")->get();

        return $product;
    }
    public function runEvent(Request $request)
    {
        $run =  DB::table("events")
        ->join("runs","eventId","=","idEvent")
        ->join("cities","idCity","=","cityId")
        ->select("events.*","runs.*","cities.*")
        ->where("cityNo",$request->cityNo)->get();
        

        return $run;
    }
}