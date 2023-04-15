<?php

namespace App\Models;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function items()
    {
    	return $this->belongsToMany(Product::class, 'order_items','order_id','product_id');
    }

    public function customer()
    {
        // dd($this->user_id);

        // dd(User::where('id',8)->first());
        return User::where('id',$this->user_id)->first();
       
    }
    // public function products()
    // {
    // 	return $this->belongsToMany(Product::class, 'order_items','order_id','product_id');
    // }
}
