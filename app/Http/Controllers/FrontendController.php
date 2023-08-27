<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Medicine;
use App\Models\Vendor_Details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        $products = Medicine::all();
        $vendors = Vendor_Details::all();
        return view('frontend.master', compact('categories', 'products','vendors'));
    }

    public function home2()
    {
        // $categories = Category::all();
        // $products = Medicine::all();
        $vendors = Vendor_Details::all();
        return view('frontend.master', compact('categories', 'products','vendors'));
    }
    public function singleProduct($id) {
        // $products=Medicine::all();
        $product=Medicine::find($id);
        // dd($medicines);
        // $vendors=Vendor_Details::all();
        // $vendors=Vendor_Details::find($id);
        return view('frontend.single_product',compact('product'));
    }


    public function proceedToCheckout() {

        return view('frontend.proceed_to_checkout');
}


}
