<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;
use App\Models\Product;
use App\Coupon;

class CartController extends Controller
{
    public function addcart(Product $product)
    {
        if($product->stock<1)
        {
            return back()->with('message','Stock Out');
        }
    \Cart::session(auth()->user()->id)->add(array(
    'id' => $product->id,
    'name' => $product->name,
    'price' => $product->price,
    'image'=> $product->product_image,
    'quantity' => 1,
    'attributes' => array(),
    'associatedModel' => $product
     ));
    return redirect()->back();
    }


    public function formAddcart(Request $request)
    {
        $product=Product::where('id', $request->product)->first();

      

        if($product->stock<$request->quantity)
        {
            return back()->with('message','not available enough quantity!');
        }

    \Cart::session(auth()->user()->id)->add(array(
    'id' => $product->id,
    'name' => $product->name,
    'price' => $product->price,
    'image'=> $product->product_image,
    'quantity' => $request->quantity,
    'attributes' => array(),
    'associatedModel' => $product
     ));
    return redirect()->back();
    }



    public function index()
    {
        $cartItems=\Cart::session(auth()->user()->id)-> getcontent();
    	return view('cart.index', compact('cartItems'));
    }


    public function delete($id)
    {
         \Cart::session(auth()->user()->id)->remove($id);
        return back();
    }

    public function update($id)
    {
        \Cart::session(auth()->user()->id)->update($id,[
            'quantity'=> array(
                'relative'=>false,
                'value'=>request('quantity'))

        ]);
        return back();
    }

    public function checkout()
    {
        return view('cart.checkout');
    }

public function applycoupon()
{

    $coupon_code= request('coupon');
    $coupondata=Coupon::where('code',$coupon_code)->first();
    if(!$coupondata)
    {
        return back()->withMessage('Sorry, coupon does not exist');
    }
    $condition = new \Darryldecode\Cart\CartCondition(array(
    'name' => $coupondata->name,
    'type' => $coupondata->type,
    'target' => 'total', // this condition will be applied to cart's subtotal when getSubTotal() is called.
    'value' => $coupondata->value,
   
));

//Cart::condition($condition);
\Cart::session(auth()->user()->id)->condition($condition);
return back()->withMessage('Coupon Applied');
}


  public function newcoupon()
    {
        return view('admin.newcoupon');
    }


    public function newcoupon2(Request $request)
    {


        Coupon::create([
//            'column name'=>'input / value'
            'name'=>$request->name,
            'code'=>$request->code,
            'type'=>$request->type,
            'value'=>$request->value,
            'description'=>$request->description,
        ]);
    return redirect()->back();
    }



    public function couponlist()
    {
        $all_coupons=Coupon::get();
        return view('admin.couponlist',compact('all_coupons'));
    }


    public function coupondelete($id)
    {
        $coupon=Coupon::find($id);
        $coupon->delete();
        return redirect()->back()->with('message', 'Data is delete Successfully');
    }


}
