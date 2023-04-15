<?php

namespace App\Http\Controllers;

use App\Models\Coustomer;
use App\Models\Order;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function cont()
    {
        return view('contract');
    }
    public function view()
    {
        $id=Auth()->user()->id;
        $orders=Order::where('user_id',$id)->get();
        return view('admin.dailyorder',compact('orders'));
    }

    
}
