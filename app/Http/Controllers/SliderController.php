<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Exception;
use Session;
use File;

class SliderController extends Controller
{
    public function index(){
        $products=Slider::all();
        return view('backend.layouts.slider.index',compact('products'));
    }


    public function create(){
        return view('backend.layouts.slider.create');
    }


    public function store(Request $request){


        $request->validate([
            'title'=>'required',
            'subTitle'=>'required',
            'link'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg',

        ]);
        $imageName='';
        if($image=$request->file('image')){
            $imageName=time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/products',$imageName);
        }

        Slider::create([
            'title'=>$request->title,
            'subTitle'=>$request->subTitle,
            'link'=>$request->link,
            'image'=>$imageName,
        ]);
        session()->flash('message', 'Post successfully updated.');
        return redirect()->route('slider_index');

        //for image and data show---->END CODE//
    }


    public function edit($id)
    {
        $product = Slider::find($id);
        return view('backend.layouts.slider.edit', compact('product'));
    }


    public function update(Request $request, $id)
    {
$product= Slider::findOrFail($id);
        $request->validate([
            'title'=>'required',
            'subTitle'=>'required',
            'link'=>'required',
        ]);
        $imageName='';
        $deleteOldImage= 'images/products/'.$product->image;

        if($image=$request->file('image')){
            if(file_exists($deleteOldImage)){
                File::delete($deleteOldImage);
            }
            else{
                $imageName=$product->image;
            }
            $imageName=time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/products',$imageName);
        }

        Slider::where('id', $id)->update([
            'title'=>$request->title,
            'subTitle'=>$request->subTitle,
            'link'=>$request->link,
            'image'=>$imageName,
        ]);
        session()->flash('message', 'Post successfully updated.');
        return redirect()->route('slider_index');

        //for image and data show---->END CODE//
    }

    public function delete($id)
    {
        $product =Slider::find($id);
        $product->delete();
        return redirect()->back();
    }
}
