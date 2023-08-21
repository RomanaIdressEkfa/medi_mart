<?php

namespace App\Http\Controllers;

use App\Models\Store_Details;
use Illuminate\Http\Request;
use File;
use Exception;
use Session;

class StoreDetailsController extends Controller
{
//     public function index(){
//         $products=Store_Details::all();
//         return view('backend.layouts.store_details.index',compact('products'));
//     }


//     public function create(){
//         return view('backend.layouts.store_details.create');
//     }


//     public function store(Request $request){

// //ONLY for data show---->START CODE//

//         // try{
//         //     $data = $request->all();
//         //     Product::create($data);
//         //     return redirect()->route('index');
//         // }catch(Exception $e){
//         //     dd($e->getMessage());
//         // }

//         //ONLY for data show---->END CODE//

//         //for image and data show---->START CODE//

//         $request->validate([
//             'vendor_name'=>'required',
//             'store_name'=>'required',
//             'store_link'=>'required',
//             'location'=>'required',
//             'store_image'=>'required|mimes:png,jpg,jpeg',

//         ]);
//         $imageName='';
//         if($store_image=$request->file('store_image')){
//             $imageName=time().'-'.uniqid().'.'.$store_image->getClientOriginalExtension();
//             $store_image->move('images/products',$imageName);
//         }

//         Store_Details::create([
//             'vendor_name'=>$request->vendor_name,
//             'store_name'=>$request->store_name,
//             'store_link'=>$request->store_link,
//             'location'=>$request->location,
//             'store_image'=>$imageName,
//         ]);
//         session()->flash('message', 'Post successfully updated.');
//         return redirect()->route('store_details_index');

//         //for image and data show---->END CODE//
//     }


//     public function edit($id)
//     {
//         $product = Store_Details::find($id);
//         return view('backend.layouts.store_details.edit', compact('product'));
//     }


//     public function update(Request $request, $id)
//     {
//         // try{
//         //     $data = $request->except('_token');
//         //     Product::where('id', $id)->update($data);
//         //     return redirect()->route('index');

//         // }catch(Exception $e){
//         //     dd($e->getMessage());
//         // }

//         //for image and data show---->START CODE//
// $product= Store_Details::findOrFail($id);
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

//         Store_Details::where('id', $id)->update([
//             'vendor_name'=>$request->vendor_name,
//             'store_name'=>$request->store_name,
//             'store_link'=>$request->store_link,
//             'location'=>$request->location,
//             'store_image'=>$imageName,
//         ]);
//         session()->flash('message', 'Post successfully updated.');
//         return redirect()->route('store_details_index');

//         //for image and data show---->END CODE//
//     }

//     public function delete($id)
//     {
//         $product =Store_Details::find($id);
//         $product->delete();
//         return redirect()->back();
//     }
}
