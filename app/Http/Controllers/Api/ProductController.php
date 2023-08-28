<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    //
    function index()
    {
        $products=Product::get();
        return response()->json(['data'=>$products,'message'=>'data returned successfully ']);

    }
    function store(Request $request)
    {
        $request->validate([
            'product_name'=>'required|string|min:3|max:20',
            'product_price'=>'required',
            'product_availability'=>'required',
            'category_id'=>'required|exists:categories,id'
        ]);
        try {
            
            $product=Product::create($request->all());

        } catch (\Throwable $th) {
            
            return response()->json(['message'=>'Server not Available now try later',503]);
        }
       return response()->json(['data'=>$product]);
    }
    function show($id)
    {
        $product=Product::find($id);
        if( $product)
        {
        return response()->json(['data'=>$product,'message'=>'product returned ok']);

        }
        return response()->json(['message'=>"product doesn't exist"]);


    }
    function destroy($id)
    {
        $product=Product::find($id);
        if($product)
        {
            $product->delete();
            return response()->json(['message'=>'product deleted ok']);
        }
        return response()->json(['message'=>"product doesn't exist"]);


    }
    function edit($id,Request $request)
    {
        $product=Product::find($id);
        if($product)
        {
            $product->update($request->all());
            return response()->json(['data'=>$product,'message'=>'product updated ok']);
    }
    return response()->json(['message'=>"product doesn't exist"]);

    }

}