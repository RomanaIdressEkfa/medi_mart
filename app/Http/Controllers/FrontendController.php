<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Medicine;
use App\Models\Vendor_Details;
use Illuminate\Http\Request;

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
public function singleProduct() {

    return view('frontend.single_product');
}

}
