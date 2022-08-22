<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contract', 'HomeController@cont')->name('contract');



Route::get('/single_product/{pid}','ProductController@single_product')->name('single_product');
Route::get('/products','ProductController@products')->name('products');
Route::get('/mancollections','ProductController@mancollection')->name('mancollection');
Route::get('/mancollectionsshirt','ProductController@mancollectionshirt')->name('mancollectionshirt');
Route::get('/womancollection','ProductController@womancollection')->name('womancollection');
Route::get('/bagcollection','ProductController@bagcollection')->name('bagcollection');
Route::get('/kidcollection','ProductController@kidcollection')->name('kidcollection');


Auth::routes();



Route::group(['middleware'=>'auth'], function () {

    Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
    Route::get('/newcategory','AdminController@newcategory')->name('newcategory');
    Route::post('/newcategory2','AdminController@newcategory2')->name('newcategory2');
    Route::get('/categorylist','AdminController@categorylist')->name('categorylist');

    Route::get('/orderpending','AdminController@orderpending')->name('orderpending');
    Route::get('/order-view/{order}','AdminController@orderView')->name('orderView');
    Route::get('/order-process/{order}','AdminController@orderProcess')->name('orderProcess');
    Route::get('/order-processing','AdminController@orderProcessing')->name('orderProcessing');
    Route::get('/order-shipped/{order}','AdminController@orderShipped')->name('orderShipped');
    Route::get('/orderCompleted','AdminController@orderCompleted')->name('orderCompleted');

    Route::get('/categoryedit','AdminController@categorylist')->name('categoryeditroute');
    Route::get('/categorydelet','AdminController@categorylist')->name('categorydelete');
    Route::get('/newproduct','AdminController@newproduct')->name('newproduct');
    Route::post('/newproduct2','AdminController@newproduct2')->name('newproduct2');
    Route::get('/productlist','ProductController@productlist')->name('productlist');
    Route::get('/product/{id}/edit', 'ProductController@edit')
    ->name('productedit');
    Route::put('/product/{id}/update','ProductController@update')->name('productupdate');
    Route::get('/product/{id}/delete','ProductController@delete')->name('productdelete');
    Route::get('/product/search','ProductController@search')->name('product.search');



    Route::get('/addcart/{product}','CartController@addcart')->name('addcart');
    Route::post('form/addcart/','CartController@formAddcart')->name('formAddcart');

    Route::get('/cart','CartController@index')->name('cartindex');
    Route::get('/cart/delete/{id}','CartController@delete')->name('cartdelete');
    Route::get('/cart/update/{id}','CartController@update')->name('cartupdate');
    Route::get('/checkout','CartController@checkout')->name('checkout');
    Route::get('/cart/apply-coupon','CartController@applycoupon')->name('cart.coupon');
     Route::resource('orders','OrderController');

     Route::get('paypal/checkout','PaypalController@getExpressCheckout');
     Route::get('paypal/checkout-sucess','PaypalController@getExpressCheckoutSuccess')->name('paypal.success');
     Route::get('paypal/checkout-cancel','PaypalController@cancel')->name('paypal.cancel');


     Route::get('/newcoupon','CartController@newcoupon')->name('newcoupon');
     Route::post('/newcoupon2','CartController@newcoupon2')->name('newcoupon2');
     Route::get('/couponlist','CartController@couponlist')->name('couponlist');

     Route::get('/coupondelete/{id}','CartController@coupondelete')->name('coupondelete');
     

     Route::get('/live_search', 'LivesearchController@index');
Route::get('/live_search/action', 'LivesearchController@action')->name('live_search.action');
	});
