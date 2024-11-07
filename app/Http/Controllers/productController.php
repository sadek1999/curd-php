<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
// use App\Models\Product;

class productController extends Controller
{
    public function index()
    {
        $products=Product::all();
        return view('products.index',['products'=>$products]);
    }
    public function create()
    {
        return view("products.create");
    }
    public function store(Request $request)
    {
       $data =$request->validate([
        "name"=>"required",
        "price"=>"required",
        "qty"=>"required",
        "description"=>"required"
       ]);
       $newProduct=Product::create($data);
       return redirect(route("product-index.php"));
    }
    public function edit(Product $product){
return view('products.edit',['product'=>$product]);
    }
    public function update(Product $product , Request $request){
        $data =$request->validate([
            "name"=>"required",
            "price"=>"required",
            "qty"=>"required",
            "description"=>"required"
           ]);
         $product->update($data); 
         return redirect(route("product-index.php"));
        //  return redirect(route('product.index.php'))->with('success',"successfully update the product");
    }
    public function delete(Product $product){
        $product->delete();
        return redirect(route("product-index.php")); 
    }
}
