<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    
public function client()
{
   
    return view('detailspage');
}

public function storeclient(Request $request)
   {

         $product = new Product();
         $product->client =$request->input('client');
         $product->category =$request->input('category');
         $product->product =$request->input('product');
         $product->quantity =$request->input('quantity');
         $product->unit_price =$request->input('unit_price');
         $product->total =$request->input('total');
         $product->price = $request->input('price');
         $product->grandtotal = $request->input('grandtotal');

         $product->save();
         return redirect()->back();
    }

   // public function showdetail($id)
   // {
   //      $products=Product::where('id',$id)->first();
   //      return redirect()->back;
   // }
}