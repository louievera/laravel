<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use Illuminate\Support\Facades\Redirect;
use Illuminate\support\facades\Input;
use DB;

class product_controller extends Controller
{
    //
    function getdata()
    {
      $products = product::all();

      return view("viewproducts",compact('products'));
    }

    function form()
    {
      return view("productform");
    }

    function insert(Request $request)
    {
      $product = new product;
      $product->product_name= Input::get("product_name");
      $product->price =       Input::get("price");
      $product->quantity  =   Input::get("quantity");
      $product->size  =       Input::get("size");
      $product->unique_code  =       Input::get("code");
      $product->save();

      return Redirect::to('/getdata');
    }

    function delete($id)
    {
      DB::table('products')->where('id',$id)->delete();

      return Redirect::to('/getdata');
    }

    function edit($id)
    {
      $product = DB::table('products')->where('id',$id)->first();

      return view('productform',compact('product'));
    }

    function update(Request $request, $id)
    {
      $product = product::find($id);
      $product->product_name= $request->product_name;
      $product->price =       $request->price;
      $product->quantity  =   $request->quantity;
      $product->size  =       $request->size;
      $product->unique_code  =$request->code;
      $product->save();
    
      return Redirect::to('/getdata');
    }


}
