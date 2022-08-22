<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productlist()
    {
        $all_products=Product::with('category')->paginate(25);
        return view('admin.productlist',compact('all_products'));
    }





    public function edit($id)
    {

        $categories=Category::all();
        $products=Product::find($id);

        return view('admin.productedit', compact('products','categories'));

    }





    public function update(Request $request,$id)
    {
        if ($request->hasFile('product_image')) {
            $product = $request->file('product_image');
            if ($product->isValid()) {
                //generate file name
                $file_name = date('Ymdhms').'.'.$product->getClientOriginalName();
                //store into directory
                $product->storeAs('product', $file_name);
            }
            Product::find($id)->update([
                'category_id'=>$request->product_category,
                'name'=>$request->product_name,
                'for_whom'=>$request->whom,
                'price'=>$request->product_price,
                'description'=>$request->description,
                'stock'=>$request->stock,
                'product_image'=>$file_name,
                /*'updated_by'=>auth()->user()->id*/
            ]);
        }else
        {
            Product::find($id)->update([
                'category_id'=>$request->product_category,
                'name'=>$request->product_name,
                'price'=>$request->product_price,
                'for_whom'=>$request->whom,
                'description'=>$request->product_description,
                'stock'=>$request->stock,
               /* 'updated_by'=>auth()->user()->id*/
            ]);
        }
        return redirect('/productlist')->with('message', 'Data is Update');
    }


    public function delete($id)
    {
        $products=Product::find($id);
        $products->delete();
        return redirect('/productlist')->with('message', 'Data is delete Successfully');
    }

    public function search(Request $request)
    {
        $query= $request->input('search');
        $products=Product::where('name','LIKE',"%$query%")->get();
        return view('search',compact('products'));
    }

    public function single_product($pid)
    {
        $product=Product::find($pid);
        return view('single_product',compact('product'));
    }


    public function products()
    {
        $mproducts=Product::where('for_whom',"man")->get();
        $wproducts=Product::where('for_whom',"women")->get();
        $kproducts=Product::where('for_whom',"kid")->get();
        $esproducts=Product::where('for_whom',"essential")->get();
        $eproducts=Product::where('for_whom',"accessories")->get();
        $allproducts=Product::where('for_whom',"all")->get();

        return view('products',compact('mproducts','wproducts','kproducts','eproducts','esproducts','allproducts'));

    }


    public function mancollectionshirt()
    {
        $products=Product::where('for_whom',"man")->where('name','LIKE',"%shirt%")->get();
        return view('search',compact('products'));

    }

    public function mancollection()
    {
        $products=Product::where('for_whom',"man")->get();
        return view('search',compact('products'));

    }

    public function womancollection()
    {
        $products=Product::where('for_whom',"women")->get();
        return view('search',compact('products'));

    }

    public function bagcollection()
    {
        $products=Product::where('name','LIKE',"%bag%")->get();
        return view('search',compact('products'));

    }

    public function kidcollection()
    {
        $products=Product::where('for_whom',"kid")->get();
        return view('search',compact('products'));

    }
    public function ecollection()
    {
        $products=Product::where('for_whom',"accessories")->get();
        return view('search',compact('products'));

    }
}
