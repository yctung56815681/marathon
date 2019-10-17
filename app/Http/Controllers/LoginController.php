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

class LoginController extends Controller
{
    // public function index(Request $request, $city, $year, $month)
    public function login()
    {
        // $obj = array();
        // // dd($obj);
        // $og = DB::table('order_groups')->get();
        // // dd($og);
        // foreach ($og as $ogi) {
        //     // $obj2 = array();
        //     $obj2 = new \stdClass();
        //     // dd($ogi);
        //     $obj2->idOrderGroup = $ogi->idOrderGroup;
        //     $obj2->orderGroupNo = $ogi->orderGroupNo;
        //     $obj2->orderGroupName = $ogi->orderGroupName;
        //     $obj2->eventId = $ogi->eventId;

        //     $o = DB::table('orders')
        //     ->join('order_groups', 'orders.orderGroupId', '=', 'order_groups.idOrderGroup')
        //     ->where('orders.orderGroupId', '=', $ogi->idOrderGroup)
        //     ->get();

        //     $obj2->order = array();
        //     foreach ($o as $oi) {
        //         array_push($obj2->order, $oi);
        //     }
        //     array_push($obj, $obj2);
        // }
        // dd($obj);

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
        //     }
        //     echo "======<br>";
        // }
        // dd("===");

//         $og = DB::table('order_groups')->get(); // will return a collection
//         echo "==========> og= " . $og . "<br>";
//         foreach ($og as $ogi) {
//             echo "ogi->idOrderGroup= " . $ogi->idOrderGroup . "^^^^^^^^^^<br>";
//             echo "ogi->idOrderGroup= " . $ogi->idOrderGroup . "<br>";
//             echo "ogi->orderGroupNo= " . $ogi->orderGroupNo . "<br>";
//             echo "ogi->orderGroupName= " . $ogi->orderGroupName . "<br>";
//             echo "ogi->eventId= " . $ogi->eventId . "<br>";
//             echo "ogi->orderGroupInvoiceLetterhead= " . $ogi->orderGroupInvoiceLetterhead . "<br>";
//             echo "ogi->orderGroupInvoiceNumber= " . $ogi->orderGroupInvoiceNumber . "<br>";

//             $o = DB::table('orders')
//             // ->select(['orders.*', 'order_groups.*',])
//             // ->select('orders.*', 'order_groups.*',)
//             ->join('order_groups', 'orders.orderGroupId', '=', 'order_groups.idOrderGroup')
//             ->where('orders.orderGroupId', '=', $ogi->idOrderGroup)
//             ->get();
//             echo "&nbsp &nbsp &nbsp &nbsp &nbsp ++++++++++> o= " . $o . "<br>";
//             foreach ($o as $oi) {
//                 echo "&nbsp &nbsp &nbsp &nbsp &nbsp ogi->idOrderGroup= " . $ogi->idOrderGroup . "^^^^^^^^^^<br>";
//                 echo "&nbsp &nbsp &nbsp &nbsp &nbsp oi->idOrder= " . $oi->idOrder . "<br>";
//                 echo "&nbsp &nbsp &nbsp &nbsp &nbsp oi->orderNo= " . $oi->orderNo . "<br>";
//                 echo "&nbsp &nbsp &nbsp &nbsp &nbsp oi->orderStatus= " . $oi->orderStatus . "<br>";
//                 echo "&nbsp &nbsp &nbsp &nbsp &nbsp oi->orderRevoke= " . $oi->orderRevoke . "<br>";
//                 echo "&nbsp &nbsp &nbsp &nbsp &nbsp oi->orderGroupId= " . $oi->orderGroupId . "<br>";
//                 echo "&nbsp &nbsp &nbsp &nbsp &nbsp oi->memberTwId=" . $oi->memberTwId . "<br>";
//                 echo "&nbsp &nbsp &nbsp &nbsp &nbsp oi->runId= " . $oi->runId . "<br>";

//                 $od = DB::table('order_details')->join('orders', 'orders.idOrder', '=', 'order_details.orderId')
//                 ->where('order_details.orderId', '=', $oi->idOrder)
//                 ->get();
//                 echo "-&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ---------> od= " . $od . "<br>";
//                 foreach ($od as $odi) {
//                     echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ogi->idOrderGroup= " . $ogi->idOrderGroup . "^^^^^^^^^^<br>";
//                     echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp oi->idOrder= " . $oi->idOrder . "^^^^^^^^^^<br>";
//                     echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp odi->idOrderDetail= ". $odi->idOrderDetail . "<br>";
//                     echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp odi->orderId= ". $odi->orderId . "<br>";
//                     echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp odi->productId= ". $odi->productId . "<br>";

//                     $p = DB::table('products')->join('order_details', 'order_details.productId', '=', 'products.idProduct')
//                     ->where('order_details.productId', '=', $odi->productId)
//                     ->where('order_details.orderId', '=', $oi->idOrder)
//                     ->get();
//                     echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ##########> p= " . $p . "<br>";
//                     foreach ($p as $pi) {
//                         echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ogi->idOrderGroup= " . $ogi->idOrderGroup . "^^^^^^^^^^<br>";
//                         echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp oi->idOrder= " . $oi->idOrder . "^^^^^^^^^^<br>";
//                         echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp odi->idOrderDetail= " . $odi->idOrderDetail . "^^^^^^^^^^<br>";
//                         echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp pi->idProduct= " . $pi->idProduct . "<br>";
//                         echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp pi->productNo= " . $pi->productNo . "<br>";
//                         echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp pi->productName= " . $pi->productName . "<br>";
//                         echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp pi->productPrice= " . $pi->productPrice . "<br>";
//                     }
//                 }

//                 $r = DB::table('runs')->join('orders', 'orders.runId', '=', 'runs.idRun')
//                 ->where('runs.idRun', '=', $oi->runId)
//                 ->where('orders.orderGroupId', '=', $ogi->idOrderGroup)
//                 ->get();
//                 echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp **********> r= " . $r . "<br>";
//                 foreach ($r as $ri) {
//                     echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp oi->idOrder= " . $oi->idOrder . "^^^^^^^^^^<br>";
//                     echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ri->idRun= " . $ri->idRun . "<br>";
//                     echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ri->eventId= " . $ri->eventId . "<br>";
//                     echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ri->runType= " . $ri->runType . "<br>";
//                     echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ri->runName= " . $ri->runName . "<br>";
//                     echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ri->runNameLong= " . $ri->runNameLong . "<br>";
//                     echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ri->runPrice= " . $ri->runPrice . "<br>";
//                 }
//                 echo "&nbsp &nbsp &nbsp &nbsp &nbsp ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~" . "<br>";
//             }
//             echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~" . "<br>";
//             echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~" . "<br>";
//         }
// dd("================================================================================");


        // $view = "login_{$city}{$year}{$month}";
        // // dd($view);
        // $viewModel = compact(
        //     "view");
        // return view("login.index", $viewModel);
        return view("login.index");
    }

    public function postLogin(Request $request)
    {
        // google : laravel database query builder --> https://laravel.com/docs/5.8/queries

        // ok
        // dd($request, $request->_token, $request->username, $request->password);
        // $a1 = Account::find(1);
        // $a2 = Account::find(2);
        // dd($a1, $a2);

        // ok
        // $all = Account::all();
        // dd($all);

        // $a1 = Account::where('username', $request->username); --> error

        // ok
        // $a1 = Account::find(1);
        // dd($a1->id, $a1->username, $a1->password);

        // ok
        // $a1 = Account::where('username', $request->username)->first();
        // dd($request->username, $request->password, $a1->id, $a1->username, $a1->password);

        // ok
        // $a1 = Account::where('username', $request->username);
        // dd($a1->value("id"), $a1->value("username"), $a1->value("password"));

        // ok
        // $a1 = Account::where('username', $request->username)->get();
        // $a11=$a1->max();
        // dd($a1, $a1->count(), $a1->max()); // --> ok
        // dd($a11->id, $a11->username, $a11->password); // --> ok

        // ok
        // $a1 = Account::where('username', $request->username)->get()->first();
        // dd($request->username, $request->password, $a1->id, $a1->username, $a1->password);
        // dd($request->username, $request->password, $a1->value("id"), $a1->value("username"), $a1->value("password"));

        // $account = Account::where('username', $request->username)->exists();
        // if ($account == null)
        // {
        //     return redirect("/login");
        // }

        // $account = Account::where('username', $request->username)->get();  // --> eloquent
        $account = DB::table('accounts')->where('username', $request->username)->get();  // facades
        if ($account->count() == 0)
        {
            return redirect("/login");
        }

        foreach ($account as $item) {
            // if ($request->password != $item->password)
            if (!password_verify($request->password, $item->password))
            {
                return redirect("/login");
            }
        }

        Session::put("userName", $request->username);
        return redirect("/ui");
    }

    public function logout()
    {
        Session::forget("userName");
        return redirect("/login");
    }
}
