<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\OrderDetail;
use DB;

class AdminController extends Controller
{
    public function menu(){
        $menus=Menu::all();
        $main_dishes=Menu::all()->where('category','=','main_dish');
        $snacks=Menu::all()->where('category','=','snack');
        $drinks=Menu::all()->where('category','=','drink');
        return view('admin_home',['main_dishes'=>$main_dishes,'snacks'=>$snacks,'drinks'=>$drinks]);
    }

    public function orderList(){
        $orders=OrderDetail::with(['order','menu'])->where('status', '=', 'Prepared')->get();
        if(empty($orders)){
            $orders=[];
        }
        return view('order',['orders'=>$orders]);
    }

    public function report(Request $request){
        $days=cal_days_in_month(CAL_GREGORIAN,date('m'),date('Y'));
        $reports = OrderDetail::
            join('orders','orders.id','=','order_details.order_id')
            ->join('menus','menus.id','=','order_details.menu_id')
            ->groupBy(['date','menus.name'])
            ->whereBetween('date',[$request->start_date,$request->end_date])
            ->select(DB::raw('date, menus.name, price , sum(quantity) as quantity, sum(orders.total) as total_income'))
            ->orderBy('date')
            ->get();
    
        return view('report',['days'=>$days,'reports'=>$reports]);
    }

    public function deliver($id){
        OrderDetail::where('id', '=', $id)->update(['status' => 'Delivered']);
        return redirect()->back();
    }

}