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
}
