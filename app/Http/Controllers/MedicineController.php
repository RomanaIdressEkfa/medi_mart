<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Medicine;
use App\Models\Vendor_Details;
use Illuminate\Http\Request;
use Exception;
use Session;
use File;

class MedicineController extends Controller
{
    public function index(){

        $products=Medicine::all();
        $vendors=Vendor_Details::all();
        // return $products;
        return view('backend.layouts.medicine_details.index',compact('products','vendors'));
    }


    public function create(){

        $categories=Category::all();

        return view('backend.layouts.medicine_details.create',compact('categories'));
    }


    public function store(Request $request){

//ONLY for data show---->START CODE//

        // try{
        //     $data = $request->all();
        //     Product::create($data);
        //     return redirect()->route('index');
        // }catch(Exception $e){
        //     dd($e->getMessage());
        // }

        //ONLY for data show---->END CODE//

        //for image and data show---->START CODE//

        $request->validate([
            'medicine_name'=>'required',
            'medicine_image'=>'required|mimes:png,jpg,jpeg',
            'price'=>'required',
            // 'category_id'=>'required',
        ]);
        $imageName='';
        if($medicine_image=$request->file('medicine_image')){
            $imageName=time().'-'.uniqid().'.'.$medicine_image->getClientOriginalExtension();
            $medicine_image->move('images/products',$imageName);
        }

         Medicine::create([
            'medicine_name'=>$request->medicine_name,
            'medicine_image'=>$imageName,
            'price'=>$request->price,
            'category_id'=>$request->category,
            'vendor_details_id'=>$request->vendor_details,

        ]);
        session()->flash('message', 'Post successfully updated.');
        return redirect()->route('medicine_details_index');

        //for image and data show---->END CODE//
    }


    public function edit($id)
    {
        $product = Medicine::find($id);
        return view('backend.layouts.medicine_details.edit', compact('product'));
    }


    public function update(Request $request, $id)
    {
        // try{
        //     $data = $request->except('_token');
        //     Product::where('id', $id)->update($data);
        //     return redirect()->route('index');

        // }catch(Exception $e){
        //     dd($e->getMessage());
        // }

        //for image and data show---->START CODE//
$product= Medicine::findOrFail($id);
        $request->validate([
            'medicine_name'=>'required',
            'price'=>'required',
        ]);
        $imageName='';
        $deleteOldImage= 'images/products/'.$product->medicine_image;

        if($medicine_image=$request->file('medicine_image')){
            if(file_exists($deleteOldImage)){
                File::delete($deleteOldImage);
            }
            else{
                $imageName=$product->medicine_image;
            }
            $imageName=time().'-'.uniqid().'.'.$medicine_image->getClientOriginalExtension();
            $medicine_image->move('images/products',$imageName);
        }

        Medicine::where('id', $id)->update([
            'medicine_name'=>$request->medicine_name,
            'medicine_image'=>$imageName,
            'price'=>$request->price,
        ]);
        session()->flash('message', 'Post successfully updated.');
        return redirect()->route('medicine_details_index');

        //for image and data show---->END CODE//
    }

    public function delete($id)
    {
        $product =Medicine::find($id);
        $product->delete();
        return redirect()->back();
    }
}
