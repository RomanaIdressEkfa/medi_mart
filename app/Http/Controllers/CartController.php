<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Exception;
use Illuminate\Http\Request;

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

//ONLY for data show---->START CODE//

        try{
            $data = $request->all();
            Cart::create($data);
            return redirect()->route('cart_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }

        //ONLY for data show---->END CODE//

        //for image and data show---->START CODE//

        // $request->validate([
        //     'vendor_name'=>'required',
        //     'store_name'=>'required',
        //     'store_link'=>'required',
        //     'location'=>'required',
        //     'store_image'=>'required|mimes:png,jpg,jpeg',

        // ]);
        // $imageName='';
        // if($store_image=$request->file('store_image')){
        //     $imageName=time().'-'.uniqid().'.'.$store_image->getClientOriginalExtension();
        //     $store_image->move('images/products',$imageName);
        // }

        // Order::create([
        //     'vendor_name'=>$request->vendor_name,
        //     'store_name'=>$request->store_name,
        //     'store_link'=>$request->store_link,
        //     'location'=>$request->location,
        //     'store_image'=>$imageName,
        // ]);
        // session()->flash('message', 'Post successfully updated.');
        // return redirect()->route('vendor_details_index');

        //for image and data show---->END CODE//
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

        //for image and data show---->START CODE//
// $product= Order::findOrFail($id);
//         $request->validate([
//             'vendor_name'=>'required',
//             'store_name'=>'required',
//             'store_link'=>'required',
//             'location'=>'required',
//         ]);
//         $imageName='';
//         $deleteOldImage= 'images/products/'.$product->store_image;

//         if($store_image=$request->file('store_image')){
//             if(file_exists($deleteOldImage)){
//                 File::delete($deleteOldImage);
//             }
//             else{
//                 $imageName=$product->store_image;
//             }
//             $imageName=time().'-'.uniqid().'.'.$store_image->getClientOriginalExtension();
//             $store_image->move('images/products',$imageName);
//         }

//         Order::where('id', $id)->update([
//             'vendor_name'=>$request->vendor_name,
//             'store_name'=>$request->store_name,
//             'store_link'=>$request->store_link,
//             'location'=>$request->location,
//             'store_image'=>$imageName,
//         ]);
//         session()->flash('message', 'Post successfully updated.');
//         return redirect()->route('vendor_details_index');

        //for image and data show---->END CODE//
    }

    public function delete($id)
    {
        $product =Cart::find($id);
        $product->delete();
        return redirect()->back();
    }
}
