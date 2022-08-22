<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order= new Order();
        $order->order_number=uniqid('RedStore-');

        $order->shipping_fullname=$request->input('fullname');
        $order->shipping_address=$request->input('fulladdress');
        $order->shipping_state=$request->input('state');
        $order->shipping_city=$request->input('city');
        $order->shipping_zipcode=$request->input('zip');
        $order->shipping_phone=$request->input('phone');
        if (!$request->has('billing_fullname')) 
        {
           $order->billing_fullname=$request->input('fullname');
        $order->billing_address=$request->input('fulladdress');
        $order->billing_state=$request->input('state');
        $order->billing_city=$request->input('city');
        $order->billing_zipcode=$request->input('zip');
        $order->billing_phone=$request->input('phone');
        }
        else
        {
        $order->billing_fullname=$request->input('billing_fullname');
        $order->billing_address=$request->input('billing_fulladdress');
        $order->billing_state=$request->input('billing_satate');
        $order->billing_city=$request->input('billing_city');
        $order->billing_zipcode=$request->input('billing_zip');
        $order->billing_phone=$request->input('billing_phone');
        }
        
        $order->grand_total= \Cart::session(auth()->user()->id)->getTotal();
        $order->item_count= \Cart::session(auth()->user()->id)->getContent()->count();
        $order->user_id = auth()->user()->id;
        $order->save();

           $cartItems = \Cart::session(auth()->user()->id)->getContent();
           foreach ($cartItems as $item) {
               $order->items()->attach($item->id,['price'=> $item->price, 'quantity'=>$item->quantity]);
           }
           if (request('payment_method')=='paypal') {
               # code...
           }

           \Cart::session(auth()->user()->id)->clear();
       return redirect('/home')->withMessage("Thank you for order");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
