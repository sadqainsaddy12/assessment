<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Payment;
use Session;
class PaymentController extends Controller
{
    public function index()
    {
        $data['payment'] = Payment::all();
        return view('admin.payment.payment',$data);
    }

    public function create_payment(request $request)
    {
        $payment = new Payment();
        $payment->name = $request->name;
        $payment->ratio = $request->ratio;
        $payment->save();
        Session::flash('message','Payment Method Has been Added');
        return  redirect('payment');
    }

    public function edit_payment(request $request)
    {
        $data = Payment::whereId($request->id)->first();
        return json_encode($data);
    }

    public function update_payment(request $request)
    {
        $payment = Payment::whereId($request->id)->first();
        $payment->name = $request->name;
        $payment->ratio = $request->ratio;
        $payment->save();
        Session::flash('message','Payment Method Has been Updated');
        return  redirect('payment');
    }

}
