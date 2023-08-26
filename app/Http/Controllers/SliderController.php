<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slider;
use App\Http\Controllers\File;

class SliderController extends Controller
{
    //   
    public function index(){
        $sliders=slider::all();
        return view('backend.layouts.slider.index',compact('sliders'));
    }

    public function create(){
        return view('backend.layouts.slider.create');
    }

    public function store(Request $request){

                    $request->validate([
                    'slider_title'=>'required',
                    'slider_sub_title'=>'required',
                    'Slider_link'=>'required',
                    'Slider_image'=>'required|mimes:png,jpg,jpeg',
        
                ]);
                $imageName='';
                if($store_image=$request->file('Slider_image')){
                    $imageName=time().'-'.uniqid().'.'.$store_image->getClientOriginalExtension();
                    $store_image->move('images/sliders',$imageName);
                }
        
                slider::create([
                    'title'=>$request->slider_title,
                    'subtitle'=>$request->slider_sub_title,
                    'link'=>$request->Slider_link,
                    'image'=>$imageName,
                ]);
                session()->flash('message', 'Slider successfully updated.');
                return redirect()->route('slider_details_index');
        
                //for image and data show---->END CODE//
            }


            public function edit($id)
            {
                $sliders = slider::find($id);
                return view('backend.layouts.slider.edit', compact('sliders'));
            }
        
            public function delete($id)
            {
                $product =slider::find($id);
                $product->delete();
                return redirect()->back();
            }

            public function update(Request $request, $id)
            {
            
        $slider= slider::findOrFail($id);
                $request->validate([
                    'slider_title'=>'required',
                    'slider_sub_title'=>'required',
                    'Slider_link'=>'required',
                    'Slider_image'=>'required|mimes:png,jpg,jpeg',
        
                ]);
                
                
                $imageName='';
                $deleteOldImage= 'images/sliders/'.$slider->store_image;
        
                if($store_image=$request->file('store_image')){
                    if(file_exists($deleteOldImage)){
                        File::delete($deleteOldImage);
                    }
                    else{
                        $imageName=$slider->store_image;
                    }
                    $imageName=time().'-'.uniqid().'.'.$store_image->getClientOriginalExtension();
                    $store_image->move('images/sliders',$imageName);
                }
        
                slider::where('id', $id)->update([
                    'title'=>$request->slider_title,
                    'subtitle'=>$request->slider_sub_title,
                    'link'=>$request->Slider_link,
                    'image'=>$imageName,
                ]);
                session()->flash('message', 'Slider successfully updated.');
                return redirect()->route('slider_details_index');
        
                //for image and data show---->END CODE//
            }
}
