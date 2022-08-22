<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;

class AdminController extends Controller
{
    public function dashboard()
    {
    	return view ('admin.dashboard'); 
    }

    public function newcategory()
    {
    	return view('admin.newcategory');
    }


    public function newcategory2(Request $request)
    {


        Category::create([
//            'column name'=>'input / value'
            'name'=>$request->name,
            'discount'=>$request->discount,
            'status'=>$request->status,
        ]);
    return redirect()->back();
    }


    public function categorylist()
    {
        $all_categories=Category::get();
        return view('admin.categorylist',compact('all_categories'));
    }

    // here Order section pending need word!

    public function orderpending()
    {
        $all_categories=Category::get();
        $pendingOrders=Order::where('status','processing')->get();
        return view('admin.orderpending',compact('pendingOrders'));
    }

    public function orderProcessing()
    {
        $all_categories=Category::get();
        $pendingOrders=Order::where('status','processing')->get();
        return view('admin.orderpending',compact('pendingOrders'));
    }

    public function orderCompleted()
    {
        $all_categories=Category::get();
        $pendingOrders=Order::where('status','completed')->get();
        return view('admin.orderpending',compact('pendingOrders'));
    }




     public function newproduct()
    {
        $categories=Category::all();

       return view('admin.newproduct',compact('categories'));
    }


    public function newproduct2(Request $request)
    {


    	$file_name = '';
        if ($request->hasFile('image')) {
            
            $product = $request->file('image');
            if ($product->isValid()) {
                //generate file name
                $file_name = date('Ymdhms').'.'.$product->getClientOriginalName();
                //store into directory
                $product->storeAs('product', $file_name);
            }
        }
        
    	Product::create([
        'category_id'=>$request->product_category,
        'name'=>$request->name,
        'for_whom'=>$request->whom,

        'price'=>$request->price,
        'description'=>$request->description,
        'stock'=>$request->stock,
        'nview'=>0,
        'nbuy'=>0,
       'product_image'=>$file_name,
    ]);
    return redirect()->back()->with('message','Product Created Successfully.');

    	
    }


    public function orderView($order)
    {
        $order=Order::where('id',$order)->first();
        $orderItems=OrderItem::where('order_id',$order->id)->get();
        // dd($orderItems);
        return view('admin.orderView',compact('order','orderItems'));
    }

    public function orderProcess($order)
    {
        $ordr=Order::where('id',$order)->first();
        $ordr->status="processing";
        $ordr->save();
        return back()->with('success',"Succesfull");
    }

    public function orderShipped($order)
    {
        $ordr=Order::where('id',$order)->first();
        $ordr->status="completed";
        $ordr->save();
        return back()->with('success',"Succesfull");
    }
}
