<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Payment;
use Session;

class OrderController extends Controller
{
    public function index()
    {
        $data['payment_drop_down'] = Payment::all();
        $data['order'] = Order::with('payment')->get();
        return view('admin.order.order',$data);
    }


    public function create_order(request $request)
    {
      $GetRatio =   Payment::whereId($request->payment_id)->first();
      $getTotalOrdersByPaymentId = Order::wherePaymentId($request->payment_id)->count();
        if($GetRatio->ratio == $getTotalOrdersByPaymentId)
        {
            Session::flash('error','You can not Payment with '.$GetRatio->name.' payment method because this payment method has exceed the limit of ratio');
            return  redirect('/');
        }else{

            $order = new Order();
            $order->name = $request->name;
            $order->payment_id = $request->payment_id;
            $order->save();
            Session::flash('message','Order Has been made payment');
            return  redirect('/');
        }
    }

}
