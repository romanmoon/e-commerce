<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaypalController extends Controller
{
    public function getExpressCheckout()
    {
    	$cart= \Cart::session(auth()->user()->id);
    	//$cartItems=
    	//	[
    	//		[
    	//		'name'=> 'Product 1',
    	//		'price'=>9.99,
    	//		'qty'=>1,
    	//		],
    	//		[
    	//		'name'=> 'Product 1',
    	//		'price'=>9.99,
    	//		'qty'=>1,
    	//		],
    	//	];

    	$cartItems=array_map( function($item){
    		return [
    			'name'=>$item['name'],
    			'price'=>$item['price'],
    			'qty'=>$item['quantity']

    		];
    	}, $cart->getContent()->toarry());
    	dd($cartItems);

    	
    	$checkoutData = [
    		'items'=>$cartItems,
    			
    		'return_url'=>route('paypal.success'),
    		'cancel_url'=>route('paypal.cancel'),
    		'invoice_id'=>uniqid(),
    		'invoice_description'=>"Order Description",
    		'total'=> $cart->getTotal()

    		];

    	$provider = new ExpressCheckout();
    	$response= $provider->setExpressCheckout($checkoutData);
    }


    public function cancel()
    {

    }
}
