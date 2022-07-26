<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\OrderDetail;
use App\Models\Order;
use DateTime;

class OrderController extends Controller
{
    public function dine_in(){
        $main_dishes=Menu::all()->where('stock','=','Available')->where('category','=','main_dish');
        $snacks=Menu::all()->where('stock','=','Available')->where('category','=','snack');
        $drinks=Menu::all()->where('stock','=','Available')->where('category','=','drink');
        $date = date("Y-m-d");
        return view('dine_in',['date'=>$date,'main_dishes'=>$main_dishes,'snacks'=>$snacks,'drinks'=>$drinks]);
    }
    public function take_away(){
        $main_dishes=Menu::all()->where('stock','=','Available')->where('category','=','main_dish');
        $snacks=Menu::all()->where('stock','=','Available')->where('category','=','snack');
        $drinks=Menu::all()->where('stock','=','Available')->where('category','=','drink');
        $date = date("Y-m-d");
        return view('take_away',['date'=>$date,'main_dishes'=>$main_dishes,'snacks'=>$snacks,'drinks'=>$drinks]);
    }

    public function order(Request $request){
        $order= $request->all();
        $order_id = Order::create($order)->id;
        for($index = 0; $index < count($order['menu_id']); $index++){
            OrderDetail::create([
                'order_id' =>$order_id,
                'menu_id' =>$order['menu_id'][ $index],
            ]);
        }
        $customer_order=OrderDetail::with(['order','menu'])->where('order_id','=',$order_id)->get();
   
        return view('confirmation',['customer_order'=>$customer_order,'order_id'=>$order_id]);
    }

    public function order_quantity(Request $request){
        for($index = 0; $index < count($request["id"]); $index++){
            OrderDetail::where('id',$request['id'][$index])->update(['quantity'=>$request['quantity'][$index]]);
        }
        $customer_order=OrderDetail::with(['order','menu'])->where('order_id','=',$request['order_id'])->get();
       
        $total=0;
        foreach($customer_order as $order){
            $total=$total+($order->menu->price*$order->quantity);
        }
        Order::where('id',$request['order_id'])->update(['total'=>$total]);

        return view('finish',['customer_order'=>$customer_order,'total'=>$total]);
    }

}
