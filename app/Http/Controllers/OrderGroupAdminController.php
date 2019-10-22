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
        // dd(json_encode($obj));
        // var_dump(json_encode($obj));


//==========================================================
        // foreach ($obj as $item) {
        //     echo "idOrderGroup=" . $item->idOrderGroup . "<br>";
        //     echo "orderGroupNo=" . $item->orderGroupNo . "<br>";
        //     echo "orderGroupName=" . $item->orderGroupName . "<br>";
        //     echo "eventId=" . $item->eventId . "<br>";
        //     foreach ($item->order as $item2) {
        //         echo "&nbsp; &nbsp; &nbsp; &nbsp; idOrder=" . $item2->idOrder . "<br>";
        //         echo "&nbsp; &nbsp; &nbsp; &nbsp; orderNo=" . $item2->orderNo . "<br>";
        //         echo "&nbsp; &nbsp; &nbsp; &nbsp; orderGroupId=" . $item2->orderGroupId . "<br>";
        //         echo "&nbsp; &nbsp; &nbsp; &nbsp; memberId=" . $item2->memberId . "<br>";
        //         echo "&nbsp; &nbsp; &nbsp; &nbsp; runId=" . $item2->runId . "<br>";
        //         echo "&nbsp; &nbsp; &nbsp; &nbsp; ++++++<br>";
        //         foreach ($item2->member as $item3){
        //             echo "&nbsp; &nbsp; &nbsp; &nbsp; idMember=" . $item3->idMember . "<br>";
        //             echo "&nbsp; &nbsp; &nbsp; &nbsp; memberTwId=" . $item3->memberTwId . "<br>";
        //             echo "&nbsp; &nbsp; &nbsp; &nbsp; memberName=" . $item3->memberName . "<br>";
        //             echo "&nbsp; &nbsp; &nbsp; &nbsp; ++++++<br>";
        //         }
        //     }
        //  echo "======<br>";
        // }
        // dd("===");
//==========================================================
// 用sql語法撈
            // $query = DB::table("order_groups")
            // ->join("orders","orderGroupId","=","idOrderGroup")
            // ->join("members","idMember","=","memberId")
            // // ->join("runs","runId","=","idRun")
            // // ->join("products","productId","=","idProduct")
            // // ->select("members.*","orders.orderNo","runs.runNameLong","products.productName")
            // // ->where("memberTwId", $request->memberTwId)
            // ->get();
    // dd($query);
//======================================================
// $obj = array();
//         // dd($obj);
//         $og = DB::table('order_groups')->get();
//         foreach ($og as $ogi) {
//             $o = DB::table('orders')
//             ->join('order_groups', 'orders.orderGroupId', '=', 'order_groups.idOrderGroup')
//             ->where('orders.orderGroupId', '=', $ogi->idOrderGroup)
//             ->get();
//             array_push($obj , $o);
//         }
//         dd($obj);
//===========================================================

// foreach ($obj as $item) {
//     foreach ($item as $item2) {
//         echo "&nbsp; &nbsp; &nbsp; &nbsp; " . $item2->idOrder . "<br>";
//         echo "&nbsp; &nbsp; &nbsp; &nbsp; " . $item2->orderNo . "<br>";
//         echo "&nbsp; &nbsp; &nbsp; &nbsp; " . $item2->memberId . "<br>";
//         echo "&nbsp; &nbsp; &nbsp; &nbsp; " . $item2->orderGroupNo . "<br>";
//         echo "&nbsp; &nbsp; &nbsp; &nbsp; " . $item2->orderGroupName . "<br>";
//         echo "&nbsp; &nbsp; &nbsp; &nbsp; " . $item2->eventId . "<br>";
//         echo "&nbsp; &nbsp; &nbsp; &nbsp; ++++++<br>";
//     }
//     echo "======<br>";
// }
// dd("===");
// ==================================================================
        // $query = DB::table("orders")
        // ->join("members","idMember","=","memberId")
        // ->join("order_groups","idOrderGroup","=","orderGroupId")
        // // ->join("order_details","idOrder","=","orderId")
        // // ->join("runs","runId","=","idRun")
        // // ->join("products","productId","=","idProduct")
        // // ->select("members.*","orders.idOrder")
        // // ->where("members.*")
        // ->get();
//==========================================================
        // 可印出(laravel內建方法)
        // $result = OrderGroup::with(['orders','orders.member'])->get();
        // foreach($result as $item) {
        //     if(!empty($item->orders->member)){
        //         $ret[] = $item->orders->member;
        //     }
        // }
        // return $ret;
//====================================================
        //test1
        // $a = array(1,2,3,4,5,6,7,8,9);
        // $b = array(1,2,3,4,5,6,7,8,9);
        // foreach($a as $valueA)
        // {
        //     foreach($b as $valueB)
        //     {
        //         echo $valueA . $valueB." ,";
        //     }
        //     echo "<br />";
        // }
        // test2
        // $data_array_en = [
        // "1" => "Apple",
        // "2" => "HTC",
        // "3" => "Samsung",
        // "4" => "ASUS",
        // "5" => "Sony"
        // ];
        // $data_json_en = json_encode($data_array_en);
        // echo $data_json_en;
// ==================================
    //test3
    // $run = DB::table('runs')->get();
    //     var_dump($run);
    //     echo "++<br><br>";
    //     var_dump($run->toArray());
    //     echo "--<br><br>";
    //     var_dump(json_encode($run->toArray()));
    //     echo "**<br><br>";
    //     var_dump(json_decode(json_encode($run->toArray())));
    //     echo "//<br><br>";
    //     dd("==");
//=================================================

// $orderGroup = DB::table('order_groups')->get();
//         var_dump($orderGroup);
//         echo "<br><br>";

//         $order = DB::table('orders')->get();
//         var_dump($orderGroup);
//         echo "<br><br>";

//         $orderDetail = DB::table('order_details')->get();
//         var_dump($orderDetail);
//         echo "<br><br>";

//         $product = DB::table('products')->get();
//         var_dump($product);
//         echo "<br><br>";
//         // dd("==");

//         $obj =  new \stdClass();
//         $obj->orderGroup = $orderGroup[0];
//         $obj->order = $order[0];
//         $obj->orderDetail = $orderDetail[0];
//         $obj->product = $product[0];
//         var_dump($obj);
//         echo "<br><br>";

//         var_dump(json_encode($obj));
//         echo "<br><br>";
//         // var_dump(json_encode($obj->toArray())); --> error
//         // var_dump(json_encode($obj->toJson())); --> error
//         echo "<br><br>";
//         dd("==");

//===================================================
        // $og1 = null;
        // $o1 = null;
        // $og2 = null;
        // $o2 = null;
        // $og = DB::table('order_groups')->get();
        // $og2 = $og;
        // foreach ($og as $ogi) {
        //     echo "ogi->idOrderGroup= " . $ogi->idOrderGroup . "^^^^^^^^^^<br>";
        //     echo "ogi->idOrderGroup= " . $ogi->idOrderGroup . "<br>";
        //     echo "ogi->orderGroupNo= " . $ogi->orderGroupNo . "<br>";
        //     echo "ogi->orderGroupName= " . $ogi->orderGroupName . "<br>";
        //     echo "ogi->eventId= " . $ogi->eventId . "<br>";
        //     echo "ogi->orderGroupInvoiceLetterhead= " . $ogi->orderGroupInvoiceLetterhead . "<br>";
        //     echo "ogi->orderGroupInvoiceNumber= " . $ogi->orderGroupInvoiceNumber . "<br>";

        //     $o = DB::table('orders')
            // ->select(['orders.*', 'order_groups.*',])
            //  ->select('orders.*', 'order_groups.*',)
            // ->join('order_groups', 'orders.orderGroupId', '=', 'order_groups.idOrderGroup')
            // ->where('orders.orderGroupId', '=', $ogi->idOrderGroup)
            // ->get();
            // $og2 += $o;
            // foreach ($o as $oi) {
            //     echo "&nbsp &nbsp &nbsp &nbsp &nbsp ogi->idOrderGroup= " . $ogi->idOrderGroup . "^^^^^^^^^^<br>";
            //     echo "&nbsp &nbsp &nbsp &nbsp &nbsp oi->idOrder= " . $oi->idOrder . "<br>";
            //     echo "&nbsp &nbsp &nbsp &nbsp &nbsp oi->orderNo= " . $oi->orderNo . "<br>";
            //     echo "&nbsp &nbsp &nbsp &nbsp &nbsp oi->orderStatus= " . $oi->orderStatus . "<br>";
            //     echo "&nbsp &nbsp &nbsp &nbsp &nbsp oi->orderRevoke= " . $oi->orderRevoke . "<br>";
            //     echo "&nbsp &nbsp &nbsp &nbsp &nbsp oi->orderGroupId= " . $oi->orderGroupId . "<br>";
            //     echo "&nbsp &nbsp &nbsp &nbsp &nbsp oi->memberId=" . $oi->memberId . "<br>";
            //     echo "&nbsp &nbsp &nbsp &nbsp &nbsp oi->runId= " . $oi->runId . "<br>";
            //     dd("================================================================================");
            // }

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
        // dd(json_encode($obj));
        // var_dump(json_encode($obj));

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