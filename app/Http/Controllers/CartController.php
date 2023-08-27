<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Medicine;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index(){
        $products=Cart::all();
        return view('backend.layouts.cart.index',compact('products'));
    }


    public function create(){
        return view('backend.layouts.cart.create');
    }


    public function store(Request $request){

        try{
            $data = $request->all();
            Cart::create($data);
            return redirect()->route('cart_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }

    }


    public function edit($id)
    {
        $product = Cart::find($id);
        return view('backend.layouts.cart.edit', compact('product'));
    }


    public function update(Request $request, $id)
    {
        try{
            $data = $request->except('_token');
            Cart::where('id', $id)->update($data);
            return redirect()->route('cart_index');

        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    public function delete($id)
    {
        $product =Cart::find($id);
        $product->delete();
        return redirect()->back();
    }

    public function addToCart(Request $request) {
        // $categories = Category::all();
        // $products = Medicine::all();
        // $cartItems=DB::table('carts')->where('user_id',auth()->user()->id)->get();
        $quantity=$request->quantity;
        $id=$request->id;

        $products=Medicine::where('id',$id)->first();
        $data['quantity']=$quantity;
        $data['id']=$products->id;
        $data['name']=$products->name;
        $data['price']=$products->price;
        $data['attribute']=[$products->image];

        Cart::add($data);
        cartArray();
        $cartItems=DB::table('carts')->where('user_id',auth()->user()->id)->get();
        dd($cartItems);

        return redirect()->back();

    }
    public function checkOut(){
        $categories = Category::all();
        $products = Medicine::all();
        $cartItems=DB::table('carts')->where('user_id',auth()->user()->id)->get();

        return view('frontend.add_to_cart',compact('categories','products','cartItems'));
    }
}
