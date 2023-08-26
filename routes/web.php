<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\VendorDetailsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin', function () {
    return view('backend.master');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('frontend.master');
});

//vendor_details start

Route::get('/vendor_details_index',[VendorDetailsController::class,'index'])->name('vendor_details_index');
Route::get('/vendor_details_create',[VendorDetailsController::class,'create'])->name('vendor_details_create');
Route::post('/vendor_details_store',[VendorDetailsController::class,'store'])->name('vendor_details_store');
Route::get('/vendor_details_edit/{id}',[VendorDetailsController::class,'edit'])->name('vendor_details_edit');
Route::post('/vendor_details_update/{id}',[VendorDetailsController::class,'update'])->name('vendor_details_update');
Route::get('/vendor_details_delete/{id}',[VendorDetailsController::class,'delete'])->name('vendor_details_delete');
//vendor_details end

//Slider start
Route::get('/slider_details_index',[SliderController::class,'index'])->name('slider_details_index');
Route::get('/slider_details_create',[SliderController::class,'create'])->name('slider_details_create');
Route::post('/slider_store',[SliderController::class,'store'])->name('slider_store');
Route::get('/slider_details_edit/{id}',[SliderController::class,'edit'])->name('slider_details_edit');
Route::post('/slider_details_update/{id}',[SliderController::class,'update'])->name('slider_details_update');
Route::get('/slider_details_delete/{id}',[SliderController::class,'delete'])->name('slider_details_delete');
//Slider_details end

//category_details start
Route::get('/category_details_index',[CategoryController::class,'index'])->name('category_details_index');
Route::get('/category_details_create',[CategoryController::class,'create'])->name('category_details_create');
Route::post('/category_details_store',[CategoryController::class,'store'])->name('category_details_store');
Route::get('/category_details_edit/{id}',[CategoryController::class,'edit'])->name('category_details_edit');
Route::post('/category_details_update/{id}',[CategoryController::class,'update'])->name('category_details_update');
Route::get('/category_details_delete/{id}',[CategoryController::class,'delete'])->name('category_details_delete');
//category_details end


//medicine_details start
Route::get('/medicine_details_index',[MedicineController::class,'index'])->name('medicine_details_index');
Route::get('/medicine_details_create',[MedicineController::class,'create'])->name('medicine_details_create');
Route::post('/medicine_details_store',[MedicineController::class,'store'])->name('medicine_details_store');
Route::get('/medicine_details_edit/{id}',[MedicineController::class,'edit'])->name('medicine_details_edit');
Route::post('/medicine_details_update/{id}',[MedicineController::class,'update'])->name('medicine_details_update');
Route::get('/medicine_details_delete/{id}',[MedicineController::class,'delete'])->name('medicine_details_delete');
//medicine_details end


//order_details start
Route::get('/order_index',[OrderController::class,'index'])->name('order_index');
Route::get('/order_create',[OrderController::class,'create'])->name('order_create');
Route::post('/order_store',[OrderController::class,'store'])->name('order_store');
Route::get('/order_edit/{id}',[OrderController::class,'edit'])->name('order_edit');
Route::post('/order_update/{id}',[OrderController::class,'update'])->name('order_update');
Route::get('/order_delete/{id}',[OrderController::class,'delete'])->name('order_delete');
//order_details end


//cart_details start
Route::get('/cart_index',[CartController::class,'index'])->name('cart_index');
Route::get('/cart_create',[CartController::class,'create'])->name('cart_create');
Route::post('/cart_store',[CartController::class,'store'])->name('cart_store');
Route::get('/cart_edit/{id}',[CartController::class,'edit'])->name('cart_edit');
Route::post('/cart_update/{id}',[CartController::class,'update'])->name('cart_update');
Route::get('/cart_delete/{id}',[CartController::class,'delete'])->name('cart_delete');
//cart_details end


//frontend part start
Route::get('/', [FrontendController::class, 'home']);
Route::get('/single_product/{id}', [FrontendController::class, 'singleProduct'])->name('single_product');
Route::get('/add_to_cart', [FrontendController::class, 'addToCart'])->name('add_to_cart');
Route::get('/proceed_to_checkout', [FrontendController::class, 'proceedToCheckout'])->name('proceed_to_checkout');




//Login->Register->And Profile Route Default START------------------
//---------------------------------------------------------------------------------//
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Login->Register->And Profile Route Default END------------------
//---------------------------------------------------------------------------------//
require __DIR__.'/auth.php';
