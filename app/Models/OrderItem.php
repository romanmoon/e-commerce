<?php

namespace App\Models;

use App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    public function item()
    {
        // dd(Product::where('id',$this->product_id)->first());
        return Product::where('id',$this->product_id)->first();
    }
}
