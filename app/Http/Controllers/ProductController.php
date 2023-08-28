<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\order;
// use Auth;

class ProductController extends Controller
{
    //
    function index()
    {
        
     $products=product::get();
 
      return view('product.index',['products'=>$products]);
    }
    function show($id)
    {
        $product=Product::find($id);
        return view('product.show',compact('product'));
    }
   
    function  destroy($id)
    {
     
        $product=Product::findorfail($id);
        $product->delete();
        return redirect()->route('product.index');
    }
    function update($id)
    {
        $product=Product::findorfail($id);
        return view('product.update',compact('product'));
    }
    function edit($id ,Request $request)
    {
        $validated=$request->validate([
            'product_name'=>'required',
            'product_price'=>'required',
            'product_availability'=>'required',
            'category_id'=>'required',
            'admin_id'=>'required',
           
        ]);
       
        $product=Product::findorfail($id);
        $product->update($request->all());
        return redirect()->route('product.index');
        
    }

    function create()
    {
        return view('product.create');
    }

    function store(Request $request)
    {
        $validated=$request->validate([
            'product_name'=>'required',
            'product_price'=>'required',
            'product_availability'=>'required',
            'category_id'=>'required',
            'admin_id'=>'required',
           
        ]);
        Product::create($request->all());
        return redirect()->route('product.index');

    }
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $products = Product::where('product_name', 'like', "%$keyword%")->get();

        return view('product.search', ['products' => $products]);
    }
    public function cart()
    {
        return view('cart');
    }
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
 
        $cart = session()->get('cart', []);
 
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }  else {
            $cart[$id] = [
                "product_name" => $product->product_name,
                "price" => $product->price,
                "quantity" => 1
            ];
        }
 
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }

    // public function markSold(Request $request, Product $product)
    // {
    //     $product->sold = true;
    //     $product->save();

    //     $user = Auth::user();
    //     $user->products()->attach($product);

    //     return response()->json(['success' => true]);
    // }
    
   
}
